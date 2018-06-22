<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Akcija;
class PageController extends Controller
{
    public function parmums() {
        $infosE = App\Info::parmumsEtikete();
        $infosF = App\Info::parmumsFilosofija();
        return view('Pages.parmums',compact('infosE','infosF'));
    }
    public function akcija(){
        $akcijas = Akcija::all();
       return view('Pages.Akcijas.akcija',['akcijas'=>$akcijas]);
   }
    public function pakalpojumi() {
        $infos = App\Info::where('Vieta','Pakalpojumi')->SimplePaginate(5);
        return view('Pages.pakalpojumi',compact('infos'));
    }
    public function cenas() {
        return view('Pages.cenas');
    }
    public function send() {
        return view('Pages.send');
    }
}
