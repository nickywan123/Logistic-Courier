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
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

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



    //Create new order
    public function store(Request $request){
        //validate request
        $validated = $request->validate([
            'rate' => 'required',
            'hub' => 'required',
            'content' => 'required',
            'value_content' => 'required',
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
        $sender = User::find(auth()->id());
        $rate_id = Rate::find($request->rate);
        $cost = $rate_id->cost;
        $credit = UserInfo::where('user_id',auth()->id())->first();
        $credit_balance = $credit->credit;
        

        //check if sufficient credit to create new order
        if($credit_balance > $cost){
            //Verify Easy Parcel API can create order + make payment success
            //get the rate checking to obtain the service id from EasyParcel
            $postparam_rate = array(
                'api'	=> config('easyparcel.key'),
                'bulk'	=> array(
                array(
                'pick_code'	=> '58200',
                'pick_state'	=> 'png',
                'pick_country'	=> 'MY',
                'send_code'	=> $request->postcode,
                'send_state'	=> $request->state,
                'send_country'	=> 'MY',
                'weight'	=> '2',
                'width'	=> '',
                'length'	=> '',
                'height'	=> '',
                'date_coll'	=> '',
                ),
                ),
                'exclude_fields'	=> array(
                'rates.*.pickup_point',
                )
                );

                $url = "https://demo.connect.easyparcel.my/?ac=EPRateCheckingBulk";

                $response = Http::asForm()->post($url,$postparam_rate);

                $collection = collect($response->json()['result'][0]['rates']);

                $filtered = $collection->where('courier_id',$rate_id->courier->courier_id)->first();
        
                if(!$filtered){
                    return redirect()->route('create.order.failed')
                    ->with(['errorMessage' =>'This courier is unavailable at the moment. Please select other courier.'] );
                }

            //dd($filtered['service_id']);

        // Create order in Easy Parcel
            $postparam = array(
                'api'	=> config('easyparcel.key'),
                'bulk'	=> array(
                array(
                'weight'	=> $rate_id->weight,
                'width'	=> '',
                'length'	=> '',
                'height'	=> '',
                'content'	=> $request->content,
                'value'	=> $request->value_content,
                'service_id'	=> $filtered['service_id'],
                'pick_point'	=> '',
                'pick_name'	=> $sender->name,
                'pick_company'	=> '',
                'pick_contact'	=> $sender->userContact->contact_num,
                'pick_mobile'	=> '',
                'pick_addr1'	=> 'hub address',
                'pick_addr2'	=> '',
                'pick_addr3'	=> '',
                'pick_addr4'	=> '',
                'pick_city'	=> 'hub_city',
                'pick_state'	=> 'hub_state',
                'pick_code'	=> '58200',
                'pick_country'	=> 'MY',
                'send_point'	=> '',
                'send_name'	=> $request->recipient_name,
                'send_company'	=> '',
                'send_contact'	=> $request->recipient_contact_number,
                'send_mobile'	=> '',
                'send_addr1'	=> $request->recipient_address,
                'send_addr2'	=> '',
                'send_addr3'	=> '',
                'send_addr4'	=> '',
                'send_city'	=> $request->city,
                'send_state'	=> $request->state,
                'send_code'	=> $request->postcode,
                'send_country'	=> 'MY',
                'collect_date'	=> $request->delivery_date,
                'sms'	=> '0',
                'send_email'	=> $request->recipient_email,
                'hs_code'	=> '',
                'REQ_ID'	=> '',
                'reference'	=> '',
                ),
                ),
                );

                $url = "https://demo.connect.easyparcel.my/?ac=EPSubmitOrderBulk";

                $response = Http::asForm()->post($url,$postparam);
                
                if($response['result'][0]['status'] !='Success'){
                    dd($response['result'][0]['remarks']);
                
                }
            
                Log::info($response->json());
                // dd($response->json());

                // return $response;

                //Make order payment in Easy Parcel

            $postparam_order_payment = array(
                'api'	=> config('easyparcel.key'),
                'bulk'	=> array(
                array(
                'order_no'	=> $response['result'][0]['order_number'],
                ),
                ),
                );

                $order_payment_url = "https://demo.connect.easyparcel.my/?ac=EPPayOrderBulk";

                $order_payment_response = Http::asForm()->post($order_payment_url,$postparam_order_payment);
                Log::info($order_payment_response);
                //dd($order_payment_response->json());
                //check payment order is fully paid
                if($order_payment_response['result'][0]['messagenow'] == 'Insufficient Credit'){
                    return redirect()->route('create.order.failed')
                    ->with(['errorMessage' =>'Insufficient credit in Easy Parcel account. Please contact support for help.'] );
                }

                //deduct the credit
                $credit->credit = $credit_balance - $cost;
                $credit->save();


                $order = new Order();
                $order->order_number = $order_payment_response['result'][0]['orderno'];
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

            return redirect()->route('create.order.failed')
            ->with(['errorMessage' =>'Insufficient Credit Balance in your account. Please top up credit balance.'] );
    }

    //Return error page if order failed
    public function createOrderStatus(){
        $errorMessage = session()->get('errorMessage'); 

        return view('orders.failed')->with('errorMessage',$errorMessage);
    }

}
