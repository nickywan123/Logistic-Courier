<?php

namespace App\Http\Controllers\Dashboard;

use App\Rate;
use App\User;
use App\Order;
use App\State;
use App\Weight;
use App\Courier;
use App\Postcode;
use App\UserInfo;
use Carbon\Carbon;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //Create new order
    public function index(){

        $weights = Weight::all();
        return view('orders.index')->with('weights',$weights);
    }

    //Show orders
    public function show(){
        $orders = Order::where('user_id',auth()->id())->latest()->get();

        return view('orders.show')->with('orders',$orders);
    }

    
    //Create quotation
    public function quotation(Request $request){
        
        $validated = $request->validate([
            'parcel_weight' => 'required',
            'parcel_size' => 'required',
            'postcode_pickup' => 'required|postal_code:MY|exists:postcodes,postcode',
            'postcode_delivery' => 'required|postal_code:MY|exists:postcodes,postcode'
        ]);

        //logic to compute the quotation rate for each courier based on the inputs
        //default - postcode belongs to Penisular Malaysia
        $location_id = 1;

        if((88000<= $request->postcode_delivery) && ($request->postcode_delivery <= 91309) ){
            //check postcode belongs Sabah
            $location_id = 2;
        }

        if((930000<= $request->postcode_delivery) && ($request->postcode_delivery <= 98859) ){
            //check postcode belongs to Sarawak
            $location_id = 2;
        }

        $rateIds=Rate::where('weight',$request->parcel_weight)
                    ->where('location_id',$location_id)
                    ->pluck('id');
        
        
        
        return redirect()->route('quotation.show')
                         ->with([
                         'rate_ids' => $rateIds,
                         'postcode_delivery' => $request->input('postcode_delivery')
                         ]);
                        
       
    }

    //Show quotation
    public function showQuotation(){

        if (!session()->has('rate_ids')) {
            return redirect()->route('order.index');
          }
         
          $rates = Rate::with('courier.image')
                   ->whereIn('id', session()->get('rate_ids'))
                   ->get();
          

            return view('orders.quotation')
                        ->with([
                            'rates' => $rates,
                            'postcode_delivery' => session()->get('postcode_delivery')
                        ]);
        
       
    }

    //Handle post request for courier quotation page
    public function createOrder(Request $request){
        //dd($request->courier);
        $validated = $request->validate([
            'courier' => 'required',         
        ]);
        
        $postcode = $request->postcode_delivery;
        $rate = Rate::where('id',$request->courier)->first();

        //retrieve state based on postcode
           
        $state_postcode = Postcode::where('postcode',$postcode)->first();

        $state = State::where('abbreviation',$state_postcode->state)->first();

        //get city tied to given postcode
        $city = $state_postcode->city;



        return redirect()->route('show.booking')
                         ->with([
                             'rate' => $rate,
                             'postcode_delivery' => $postcode,
                             'state' => $state,
                             'city' =>$city
                         ]);

    }

    //Show order booking page
    public function showBooking(){
        if (!session()->has('rate')) {
            return redirect()->route('order.index');
          }

          return view('orders.create')->with([
            'rate' => session()->get('rate'),
            'postcode_delivery' => session()->get('postcode_delivery'),
            'state' => session()->get('state'),
            'city' => session()->get('city')
          ]);

       // return view('orders.create');
         
    }





    //Finalize order
    public function store(Request $request){
        //validate request
        $validated = $request->validate([
            'rate' => 'required',
            'hub' => 'required',
            'pick_up_date' => 'required',
            'pick_up_time' => 'required',
            'weight' => 'required',
            'recipient_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'delivery_date' => 'required',
            'delivery_time' => 'required',
            'recipient_name' => 'required',
            'recipient_contact_number' => 'required'         
        ]);

        $rate_id = Rate::find($request->rate);
        $cost = $rate_id->cost;
        $credit = UserInfo::where('user_id',auth()->id())->first();
        $credit_balance = $credit->credit;
        //check if sufficient credit
        if($credit_balance > $cost){
            //deduct the credit
            $credit->credit = $credit_balance - $cost;
            $credit->save();

            $poSequence = Order::all()->count() + 1;

            $order = new Order();
            $order->order_number =  'PO' . Carbon::now()->format('Y') . Carbon::now()->format('m') . '-' . str_pad($poSequence, 6, "0", STR_PAD_LEFT);
            $order->user_id = auth()->id();
            $order->courier_id = $rate_id->courier_id;
            $order->amount = $cost;
            $order->order_status = 1000;
            $order->save();

            $order_details = new OrderDetail();
            $order_details->order_number = $order->order_number;
            $order_details->hub = $request->hub;
            $order_details->pickup_date = $request->pick_up_date;
            $order_details->pickup_time = $request->pick_up_time;
            $order_details->weight = $request->weight;
            $order_details->delivery_note = $request->delivery_note;
            $order_details->recipient_address = $request->recipient_address;
            $order_details->city = $request->city;
            $order_details->state = $request->state;
            $order_details->postcode = $request->postcode;
            $order_details->delivery_date = $request->delivery_date;
            $order_details->delivery_time = $request->delivery_time;
            $order_details->recipient_name = $request->recipient_name;
            $order_details->contact_number = $request->recipient_contact_number;
            $order_details->email = $request->recipient_email;
            $order_details->save();

            return redirect()->route('order.show');

        }

         dd('INSUFFUCIENT CREDIT');
    }

}
