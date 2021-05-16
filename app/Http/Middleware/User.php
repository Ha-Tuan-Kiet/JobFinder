<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check())
        {
           return redirect()->route('login');
        }

        //role 2= user
        if(Auth::check() && Auth::user()->role_id ==2)
        {
            return $next($request);
        }
        else {
            return redirect()->route('login');
        }
    }
}
