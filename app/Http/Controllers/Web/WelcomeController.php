<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Web\Faq;
use App\Web\FaqCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function welcome(){
        return view('welcome', [
            'categories' => FaqCategory::with(['faqs'])->get()
        ]);
    }

}
