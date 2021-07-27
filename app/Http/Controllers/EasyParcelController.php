<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EasyParcelController extends Controller
{
    //
    public function makingOrder(){

         // create order in Easy Parcel
         $postparam = array(
            'api'	=> config('easyparcel.key'),
            'bulk'	=> array(
            array(
            'weight'	=> '2',
            'width'	=> '',
            'length'	=> '',
            'height'	=> '',
            'content'	=> 'xxxx',
            'value'	=> '1',
            'service_id'	=> 'EP-CS023',
            'pick_point'	=> '',
            'pick_name'	=> 'John Doe',
            'pick_company'	=> 'Sdn Bhd',
            'pick_contact'	=> '0123456789',
            'pick_mobile'	=> '0123456789',
            'pick_addr1'	=> 'ppppp46/7 adfa',
            'pick_addr2'	=> '',
            'pick_addr3'	=> '',
            'pick_addr4'	=> '',
            'pick_city'	=> 'city',
            'pick_state'	=> 'kul',
            'pick_code'	=> '47000',
            'pick_country'	=> 'MY',
            'send_point'	=> '',
            'send_name'	=> 'Sender Name',
            'send_company'	=> '',
            'send_contact'	=> '0122134567',
            'send_mobile'	=> '',
            'send_addr1'	=> 'ssssadsasdst test',
            'send_addr2'	=> '',
            'send_addr3'	=> '',
            'send_addr4'	=> '',
            'send_city'	=> 'send city',
            'send_state'	=> 'sg',
            'send_code'	=> '58200',
            'send_country'	=> 'MY',
            'collect_date'	=> '2021-07-23',
            'sms'	=> '0',
            'send_email'	=> 'xxxx@hotmail.com',
            'hs_code'	=> '',
            'REQ_ID'	=> '',
            'reference'	=> '',
            ),
            ),
            );
          

            $url = "https://connect.easyparcel.my/?ac=EPSubmitOrderBulk";

            $response = Http::asForm()->post($url,$postparam);

            Log::info('<!!!!!!--------------------------------!!!!!!>');
            Log::info($response);
            //dd($response->json());
            //dd($response['result'][0]['order_number']);
           // dd($response['api_status']);

           $postparam_order_payment = array(
            'api'	=> config('easyparcel.key'),
            'bulk'	=> array(
            array(
            'order_no'	=> $response['result'][0]['order_number'],
            ),
            ),
            );

            $order_payment_url = "https://connect.easyparcel.my/?ac=EPPayOrderBulk";

            $order_payment_response = Http::asForm()->post($order_payment_url,$postparam_order_payment);
            Log::info($order_payment_response);
            return $order_payment_response;

    }


    public function rateChecking(){

        $postparam = array(
            'api'	=> config('easyparcel.key'),
            'bulk'	=> array(
            array(
            'pick_code'	=> '58200',
            'pick_state'	=> 'png',
            'pick_country'	=> 'MY',
            'send_code'	=> '47000',
            'send_state'	=> 'kul',
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

            $response = Http::asForm()->post($url,$postparam);

            $collection = collect($response->json()['result'][0]['rates']);

            $filtered = $collection->where('courier_id',"EP-CR03")->first();
            dd($filtered['service_id']);

    }
}
