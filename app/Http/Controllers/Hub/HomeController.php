<?php

namespace App\Http\Controllers\Hub;

use App\Announcements;
use App\Http\Controllers\Controller;
use App\Hub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','role:hub']);
    }

    public function index(){
        return view('hub.index');
    }

    public function announcementscenter(){
        $hub = Hub::where('email', Auth::user()->email)->first();
        $announcements = Announcements::where('hub_id', $hub->id)->orderBy('id', 'desc')->get();
        return view('hub.announcements', [
            'announcements' => $announcements
        ]);
    }

}
