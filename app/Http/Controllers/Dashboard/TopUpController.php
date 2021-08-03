<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopUpController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','verified']);
    }

    //Top Up Credit page
    public function index(){
        return view('payments.topup.index');
    }

    //Display top up history for user
    public function show(){
        $transactions = Transaction::where('user_id',Auth::user()->id)->get();
        return view('payments.topup.show')->with('transactions',$transactions);
    }
}
