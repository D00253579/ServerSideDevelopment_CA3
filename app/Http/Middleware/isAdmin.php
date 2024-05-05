<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Check for if the user is logged in
        if(auth()->check()){

            //checking the integer in the isAdmin column of the user table to see if the user is an admin.
            if(auth()->user()->isAdmin == 1){
                return $next($request);

            }else{
                //Redirect to the home page
                return redirect()->route('user.home');
            }
        }
    }
}
