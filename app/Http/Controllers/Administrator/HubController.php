<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Hub;
use App\State;
use App\User;
use App\UserInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HubController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','role:administrator']);
    }

    public function index(){
        $hubs = Hub::all();

        return view('administrator.hubs.index')->with('hubs',$hubs);
    }

    public function edit(Hub $hub){
        return view('administrator.hubs.edit')->with('hub',$hub);
    }

    public function update(Hub $hub, Request $request){
        $validated = $request->validate([
            'hub_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required|string|min:8',
            'city' => 'required|string',
            'state' => 'required|string',
            'postcode' => 'required|integer|exists:postcodes'
        ]);

        $hub->update([
            'hub_name' => $request->hub_name,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postcode' => $request->postcode
        ]);

        return redirect()->route('admin.hubs.index');
    }

    public function create(){

        $states = State::all();

        return view('administrator.hubs.create')->with('states',$states);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'hub_name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'address' => 'required|string|min:8',
            'city' => 'required|string',
            'state' => 'required|string',
            'postcode' => 'required|integer|exists:postcodes',
            'password' => 'required|string|min:8|confirmed',
        ]);



        $user = new User();
        $user->name = $request->hub_name;
        $user->email = $request->email;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make($request->password);
        $user->save();


        $userInfo = new UserInfo();
        $userInfo->user_id = $user->id;
        $userInfo->credit = 0;
        $userInfo->save();


        $hub = new Hub();
        $hub->hub_name = $request->hub_name;
        $hub->email = $request->email;
        $hub->address = $request->address;
        $hub->city = $request->city;
        $hub->state = $request->state;
        $hub->postcode = $request->postcode;
        $hub->save();

        $user->assignRole('customer');
        $user->assignRole('hub');
        
        return redirect()->route('admin.hubs.index');

    }
}
