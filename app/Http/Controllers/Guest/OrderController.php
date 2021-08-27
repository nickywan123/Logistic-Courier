<?php

namespace App\Http\Controllers\Guest;

use App\Rate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
       //Generate quotation
       public function quotation(Request $request){
        //check if parcel weight is numeric value
        $validated = $request->validate([
            'parcel_weight' => 'required|numeric|between:0.1,30',
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

        if((93000<= $request->postcode_delivery) && ($request->postcode_delivery <= 98859) ){
            //check postcode belongs to Sarawak
            $location_id = 2;
        }
        //dd(ceil($request->parcel_weight));
        $rateIds=Rate::where('weight',ceil($request->parcel_weight))
                    ->where('location_id',$location_id)
                    ->pluck('id');
        
        
        
        return redirect()->route('guest.quotation.show')
                         ->with([
                         'rate_ids' => $rateIds,
                         'postcode_delivery' => $request->input('postcode_delivery'),
                         'parcel_weight'=>$request->parcel_weight
                         ]);
                          
    }

      //Show quotation
      public function showQuotation(){

        if (!session()->has('rate_ids')) {
            return redirect()->route('landing.page');
          }
         
          $rates = Rate::with('courier.image')
                   ->whereIn('id', session()->get('rate_ids'))
                   ->get();
         
            //temporarily display courier from easy parcel only
            $collection =collect($rates);
            $filtered = $collection->whereIn('courier_id',[1,2,4,5])->all(); 
            $rates = $filtered;
            //dd($filtered);
          

            return view('guest.quotation')
                        ->with([
                            'rates' => $rates,
                            'postcode_delivery' => session()->get('postcode_delivery'),
                            'parcel_weight' => session()->get('parcel_weight')
                        ]);
        
       
    }
}
