<?php

namespace App\Http\Controllers;
use Mail;
use App\User;
use Auth;
use App\Mail\TouchSpa;
use App\Mail\UnapplyTouchSpa;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(){
        $user = User::where('email', Auth::user()->email)->first();
        $user->SubStatus = true;
        $user->save();
        Mail::send(new TouchSpa());
        return redirect()->back();
    }
    public function unsend(){
        $user = User::where('email', Auth::user()->email)->first();
        $user->SubStatus = false;
        $user->save();
        Mail::send(new UnapplyTouchSpa());
        return redirect()->back();
    }
    public function email(){
        return view('email');
    }
}
