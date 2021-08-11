<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Order;
use App\Rate;
use App\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth','role:administrator']);
    }



    public function getOrders(){
        $orders = Order::all();
        return view('administrator.orders.index')->with('orders',$orders);
    }
}
