<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Psr7\Request as Psr7Request;

class ToyyibpayController extends Controller
{

    // public function __construct()
    // {
    //     return $this->middleware('auth');
    // }
       
    public function createBill(Request $request){
       


        $credit = ($request->amount)*100;
        $option = array(
            'userSecretKey'=>config('toyyibpay.key'),
            'categoryCode'=>config('toyyibpay.category'),
            'billName'=>'FUIYOH HUB',
            'billDescription'=>'Top Up Credit',
            'billPriceSetting'=>1,
            'billPayorInfo'=>0,
            'billAmount'=>$credit,
            'billReturnUrl'=>route('toyyibpay-status'),
            'billCallbackUrl'=>route('toyyibpay-callback'),
            'billExternalReferenceNo' => '',
            'billTo'=>'',
            'billEmail'=>'',
            'billPhone'=>'',
            'billSplitPayment'=>0,
            'billSplitPaymentArgs'=>'',
            'billPaymentChannel'=>0,
            'billContentEmail'=>'Thank you for using our platform!',
            'billChargeToCustomer'=>2
          );  

    
          $url = 'https://dev.toyyibpay.com/index.php/api/createBill';
          
          $response = Http::asForm()->post($url,$option);
          
          $billCode = $response[0]['BillCode'];

          //Cache the user
          Cache::add($billCode,auth()->id(),now()->addMinutes(30));
         
          return redirect('https://dev.toyyibpay.com/'.$billCode);
    }

    public function paymentStatus(Request $request){

        //if success save payment record to db
            
          $response = $request->all();

          // check if transaction is successful
          if($request->status_id == 1){

            Log::info('Payment Status complete');
            Log::info($response);
            //return $response;
            return view('payments.success')
                    ->with('transaction_id',$request->transaction_id);
          }else{

            return view('payments.failed')
                   ->with('errorMessage',$request->msg);
          }
          
    }

    public function callback(Request $request){
        //retrieve the user key from the initial request
        $user_id = Cache::pull($request->billcode);
        Log::info('!!!!!!!!!!!!!');
        Log::info('callback function is called');
        $response = request()->all();
        Log::info($response);
        Log::info('This is user id:'.$request->get('user_id'));
        Log::info('!!!!!!!!!!!!!!!');

        if($request->status == 1){
        //store transaction details
        $transaction = new Transaction();
        //In server, should return cache value for user ID.
        $transaction->user_id = $user_id;
        $transaction->billcode = $request->billcode;
        $transaction->transaction_id = $request->refno;
        $transaction->amount = $request->amount;
        $transaction->save();

        //update new credit balance for user
        $user_credit = UserInfo::where('user_id',$user_id)->first();
        $user_credit->credit += $request->amount;
        $user_credit->save();

        }
        Log::info('successsss');
        return 1;
    }
}
