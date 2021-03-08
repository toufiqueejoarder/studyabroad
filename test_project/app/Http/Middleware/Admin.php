<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(!Auth::check()){
            return redirect()->route('login');
        }
        //role 3 is for admin, role 1 is for student, role 2 is for university.
        if(Auth::user()->role==3){
            return $next($request); // will pass the admin to the requested routes
        }
        if(Auth::user()->role==1){
            return redirect()->route('student'); // will redirect the routes to students pages.
        }
        if(Auth::user()->role==2){
            return redirect()->route('university'); // will redirect the routes to university pages.
        }
    }
}
