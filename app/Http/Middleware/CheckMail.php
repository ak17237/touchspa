<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;
use Illuminate\Support\Facades\Lang;

class CheckMail
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
        if($user->SubStatus == true){
            return redirect()->back()->withErrors(Lang::get('messages.error_apply'));
        }
            return $next($request);
    }
}
