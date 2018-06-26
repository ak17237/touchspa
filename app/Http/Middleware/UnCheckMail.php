<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;
use Illuminate\Support\Facades\Lang;

class UnCheckMail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user() == null){    
        return redirect()->back()->withErrors(Lang::get('messages.error_login'));
        }
        $user = User::where('email', Auth::user()->email)->first();
        if($user->SubStatus == false){
            return redirect()->back()->withErrors(Lang::get('messages.error_unapply'));
        }
        return $next($request);
    }
}
