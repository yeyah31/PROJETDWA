<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $usertype)
    {
        if(auth()->user()->type==$usertype){
            return $next($request);
        }
       /* else if(auth()->user()->type==1){
            return view('adminHome');
        }*/
        return response()->json(["Oops! vous n'avez pas la permission d'acceder a cette page"]);
    }
}
