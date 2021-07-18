<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EasyParcelController extends Controller
{
    //
    public function checkRates(){

        $option = array(
            'api'	=> 'EP-tBRjE5Vpz',
            'bulk'	=> array(
            array(
            'pick_code'	=> '58200',
            'pick_state'	=> 'kul',
            'pick_country'	=> 'MY',
            'send_code'	=> '47000',
            'send_state'	=> 'sgr',
            'send_country'	=> 'MY',
            'weight'	=> '1',
            'width'	=> '0',
            'length'	=> '0',
            'height'	=> '0',
            'date_coll'	=> '2017-11-08',
            )
            // array(
            // 'pick_code'	=> '',
            // 'pick_state'	=> '',
            // 'pick_country'	=> '',
            // 'send_code'	=> '',
            // 'send_state'	=> '',
            // 'send_country'	=> '',
            // 'weight'	=> '',
            // 'width'	=> '',
            // 'length'	=> '',
            // 'height'	=> '',
            // 'date_coll'	=> '',
            // ),
            ),
            'exclude_fields'	=> array(
            'rates.*.pickup_point',
            )
            );

            $url = "https://demo.connect.easyparcel.my/?ac=EPRateCheckingBulk";

            $response = Http::asForm()->post($url,$option);
            Log::info('<!!!!!!--------------------------------!!!!!!>');
            Log::info($response);
            return $response;

    }
}
