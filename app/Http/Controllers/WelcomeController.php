<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use Lang;
use Illuminate\Support\Facades\Auth;
class WelcomeController extends Controller
{
    public function welcome(){
        $infos = Info::homepage();
        return view('Pages.home',compact('infos'));
    }
}
