<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\contactMail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(){
        Mail::send(new contactMail());
        return view('Pages.send');
    }
    public function email(){
        return view('email');
    }
}
