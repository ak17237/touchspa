<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class AdminController extends Controller
{
    
public function index(){
    $users = User::all(); 
    $result = \Session::get('result'); /* pieņem sessijas mainīgo kas aizpildās calculate metodē,ja tā vēl nav izsaukta tad tukšs */
    if(\Session::has('intype')) $intype = \Session::get('intype');  /* ja sessijas mainīgajā ir vērtība,tad pieņem to,ja nav tad dollars */
    else $intype = 'USD';
    if(\Session::has('outtype')) $outtype = \Session::get('outtype');
    else $outtype = 'USD';
    if(\Session::has('in')) $in = \Session::get('in');
    else $in = '';
    if (\Session::has('pos'))
    return redirect('/home/adminpanel#currency')->with(compact('users','result','intype','outtype','in'));
    else 
    return view('admin',compact('users','result','intype','outtype','in')); /* kods lai mainīgie strādātu uz html lapas admin */ 
}
public function assignroles(Request $request){
        if($request['role_user'] && $request['role_admin']){
            return redirect()->back()->withErrors('User may have only one role');
        }
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
    public function calculate(Request $request){

        if(empty($request['in_currency'])){ /* ja nav ievadīti dati tad rezultāta laukā tiek attēlots Nothing added */
/* lauks kuram ir vārds in_currency tiek pārbadīts uz tukšumu */
            $result = "Nothing added";
            $pos = true;
return redirect()->back()->with('result',$result)->with('intype',$request['intype_currency'])
->with('outtype',$request['outtype_currency'])->with('in',$request['in_currency'])->with('pos',$pos); // izvadīti sessijas mainīgie ar vērtībām

        }
        else { 

            $currencies = array( // masīvs kurā ir valūtas kursi
                'USD' => 1,
                'GBP' => 0.77288712,
                'EUR' => 0.878456727,
                'RUB' => 65.7030223
            );

            $result = ($request['in_currency']/$currencies[$request['intype_currency']])*$currencies[$request['outtype_currency']]; // pēc formulas paņemot valūtas kursu reiķina
            $result = number_format((float)$result, 2, '.', ''); // apaļošana rezultātam līdz 2 cipariem aiz komata
            $pos = true;
        return redirect()->back()->with('result',$result)->with('intype',$request['intype_currency'])
        ->with('outtype',$request['outtype_currency'])->with('in',$request['in_currency'])->with('pos',$pos);
        }
    
    }
}