<?php

namespace App\Http\Controllers\Dashboard;

use App\Announcements;
use App\Hub;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Auth;

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

        $hub = Hub::where('email', Auth::user()->email)->first();
        if (isset($hub->id)) {
            $hubid = $hub->id;
        } else {
            $hubid = 0;
        }
        $announcements = Announcements::where('hub_id', $hubid)->orderBy('id', 'desc')->take(3)->get();
        return view('layouts.dashboard.index', [
            'announcements' => $announcements
        ])->with('total_delivered',$total_delivered);
    }

}
