<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use Lang;
class WelcomeController extends Controller
{
    public function welcome(){
        $infos = Info::homepage();
        return view('Pages.home',compact('infos'));
    }
}
