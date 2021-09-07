<?php

namespace App\Http\Controllers;

use App\CreditHistory;
use App\Order;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinanceController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','verified']);
    }

    public function index(){
        $transactions = Transaction::where('user_id',Auth::user()->id)->latest()->get();

        $credit_histories = CreditHistory::where('user_id',Auth::user()->id)->latest()->get();

        $orders = Order::where('user_id',Auth::user()->id)->latest()->get();

        return view('finances.index')
                ->with(['transactions' =>$transactions,
                        'credit_histories' => $credit_histories,
                        'orders' => $orders
                        ]);
    }
}
