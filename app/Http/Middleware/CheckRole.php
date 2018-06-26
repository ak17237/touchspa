<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Lang;

class CheckRole
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
            return response(Lang::get('messages.insufficient_permissions'), 401);
        }
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;
        
        if($request->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
        }
        return response(Lang::get('messages.insufficient_permissions'), 401);
    }
}
