<?php

namespace App\Http\Controllers\Administrator;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserInfo;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','role:administrator']);
    }

    public function index(){

        $users = User::all();

        return view('administrator.users.index')->with('users',$users);
    }

    public function create(){
        return view('administrator.users.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $userInfo = new UserInfo();
        $userInfo->user_id = $user->id;
        $userInfo->credit = 0;
        $userInfo->save();

        $user->assignRole('customer');

        return redirect()->route('admin.users.index');

    }

    public function edit(User $user){
        return view('administrator.users.edit')->with('user',$user);
    }

    public function update(User $user,Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'credit' => 'required|numeric',
        ]);

        $user->update([
            'name' => $request->name,
        ]);

        $user->userInfo->update([
            'credit' => $request->credit
        ]);

        return redirect()->route('admin.users.index');
    }

}
