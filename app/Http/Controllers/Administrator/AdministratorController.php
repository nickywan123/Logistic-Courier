<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Rate;
use App\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth','role:administrator']);
    }

    public function index(){

        $users = User::all();

        return view('administrator.index')->with('users',$users);
    }

    public function getRates(){
        $rates = Rate::all();
        return view('administrator.rates.index')->with('rates',$rates);
    }
}
