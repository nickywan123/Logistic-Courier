<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComingSoonController extends Controller
{

    protected $view = 'layouts.';

    public function show(){
        return view($this->view.'comingsoon');
    }
}
