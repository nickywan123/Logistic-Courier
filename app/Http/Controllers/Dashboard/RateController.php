<?php

namespace App\Http\Controllers\Dashboard;

use App\Rate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;

class RateController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified']);
    }

    public function createPDF(){
        $rates = Rate::all();

        $pdf = PDF::loadView('pdf.rates', compact('rates'))->setPaper('A4');
        return $pdf->stream('fuiyoh-hub-rates.pdf');
        //return $pdf->download('fuiyoh-hub-rates.pdf');
    }
}
