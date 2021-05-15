<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Admin
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
        {
            if(!Auth::check())
            {
                return redirect()->route('login');
            }
            //role 1 = admin
            if(Auth::check() && Auth::user()->role_id ==1){
                return $next($request);
            }
            else{
                return redirect()->route('login');
            }
        }
    }
}
