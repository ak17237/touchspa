<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class AdminController extends Controller
{
public function index(){
    $users = User::all();
    return view('admin',['users' => $users]);
}
public function assignroles(Request $request){
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
       if ($request['role_user']){
           $user->roles()->attach(Role::where('name','User')->first());
       }
       if ($request['role_admin']){
           $user->roles()->attach(Role::where('name','Admin')->first());
       }
        return redirect()->back();
    }
}
