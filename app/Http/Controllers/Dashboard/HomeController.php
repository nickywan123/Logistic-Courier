<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    // Dashboard Home Page
    public function index(){
        $user = User::find(auth()->id())->first();
        $total_delivered = Order::where('user_id',$user->id)
                                ->where('order_status',1003)
                                ->get();
        $total_delivered = $total_delivered->count();                        

        return view('layouts.dashboard.index')
                    ->with('total_delivered',$total_delivered);
    }
}
