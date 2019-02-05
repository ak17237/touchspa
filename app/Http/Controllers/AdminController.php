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
    else $intype = 'dollars';
    if(\Session::has('outtype')) $outtype = \Session::get('outtype');
    else $outtype = 'dollars';
    if(\Session::has('in')) $in = \Session::get('in');
    else $in = '';
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
            return redirect()->back()->with('result',$result)->with('intype',$request['intype_currency'])
->with('outtype',$request['outtype_currency'])->with('in',$request['in_currency']); // izvadīti sessijas mainīgie ar vērtībām

        }
        if ($request['intype_currency'] == 'dollars'){

            if($request['outtype_currency'] == 'dollars'){

                $result = $request['in_currency'] * 1;

            }
            else if($request['outtype_currency'] == 'pounds'){

                $result = $request['in_currency'] * 0.768261578;

            }
            else if($request['outtype_currency'] == 'euro'){

                $result = $request['in_currency'] * 0.875771774;

            }
            else if($request['outtype_currency'] == 'rub'){

                $result = $request['in_currency'] * 65.4664484;

            }
        }
        if ($request['intype_currency'] == 'pounds'){

            if($request['outtype_currency'] == 'dollars'){

                $result = $request['in_currency'] * 1.30164;

            }
            else if($request['outtype_currency'] == 'pounds'){

                $result = $request['in_currency'] * 1;

            }
            else if($request['outtype_currency'] == 'euro'){

                $result = $request['in_currency'] * 1.13993957;

            }
            else if($request['outtype_currency'] == 'rub'){

                $result = $request['in_currency'] * 85.1666121;

            }
        }
        if ($request['intype_currency'] == 'euro'){

            if($request['outtype_currency'] == 'dollars'){

                $result = $request['in_currency'] * 1.14185;

            }
            else if($request['outtype_currency'] == 'pounds'){

                $result = $request['in_currency'] * 0.877239482;

            }
            else if($request['outtype_currency'] == 'euro'){

                $result = $request['in_currency'] * 1;

            }
            else if($request['outtype_currency'] == 'rub'){

                $result = $request['in_currency'] * 74.8081833;

            }
        }
            if ($request['intype_currency'] == 'rub'){

                if($request['outtype_currency'] == 'dollars'){
    
                    $result = $request['in_currency'] * 0.015275;
    
                }
                else if($request['outtype_currency'] == 'pounds'){
    
                    $result = $request['in_currency'] * 0.0117416905;
    
                }
                else if($request['outtype_currency'] == 'euro'){
    
                    $result = $request['in_currency'] * 0.0133673572;
    
                }
                else if($request['outtype_currency'] == 'rub'){
    
                    $result = $request['in_currency'] * 1;
    
                }
        }
        $result = number_format((float)$result, 2, '.', ''); // apaļošana rezultātam līdz 2 cipariem aiz komata
        
return redirect()->back()->with('result',$result)->with('intype',$request['intype_currency'])
->with('outtype',$request['outtype_currency'])->with('in',$request['in_currency']);
        }
}
