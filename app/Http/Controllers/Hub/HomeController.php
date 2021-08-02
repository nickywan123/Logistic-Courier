<?php

namespace App\Http\Controllers\Hub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','role:hub']);
    }

    public function index(){
        return view('hub.index');
    }
}
