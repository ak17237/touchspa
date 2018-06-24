<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Akcija;
use App\Price;
use Illuminate\Support\Facades\Auth;
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
        $cenasF = Price::Frizieris();
        $cenasM = Price::Manikirs();
        $cenasP = Price::Pedikirs();
        return view('Pages.cenas',compact('cenasF','cenasM','cenasP'));
    }
    public function send() {
        return view('Pages.send');
    }
    }
