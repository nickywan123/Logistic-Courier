<?php

namespace App\Http\Controllers\Hub;

use App\Http\Controllers\Controller;
use App\Hub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','role:hub']);
    }

    public function index(){
        //Show all customer orders from this specific hub
        $hub_orders = Hub::where('hub_name',Auth::user()->name)->first();

        return view('hub.orders.index')->with('hub_orders',$hub_orders);
    }
}
