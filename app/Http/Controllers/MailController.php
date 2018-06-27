<?php

namespace App\Http\Controllers;
use Mail;
use App\User;
use Auth;
use Illuminate\Support\Facades\Lang;
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
        return redirect()->back()->with('message', Lang::get('messages.success_apply'));
    }
    public function unsend(){
        $user = User::where('email', Auth::user()->email)->first();
        $user->SubStatus = false;
        $user->save();
        Mail::send(new UnapplyTouchSpa());
        return redirect()->back()->with('message', Lang::get('messages.success_unapply'));
    }
    public function email(){
        return view('email');
    }
}
