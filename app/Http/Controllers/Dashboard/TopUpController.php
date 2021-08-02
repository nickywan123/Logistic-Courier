<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
