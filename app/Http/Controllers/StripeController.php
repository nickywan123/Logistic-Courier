<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(){

            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $intent = \Stripe\PaymentIntent::create([
                'amount' => 2099,
                'currency' => 'usd',
                // Verify your integration in this guide by including this parameter
                'metadata' => ['integration_check' => 'accept_a_payment'],
            ]);
            $intent = $intent->client_secret;

            // $user =User::find(Auth::user()->id);
            // $role = $user->hasRole('hub');
            // if($user->hasRole('hub')){
            //     dd('user has hub role');
            // }else{
            //     dd('user is not hub role');
            // }
        return view('stripe.index')->with('intent',$intent);
    }

    public function store(Request $request){
      
   
       
        dd($request->all());
    }
   
}
