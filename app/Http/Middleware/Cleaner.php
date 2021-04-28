<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cleaner
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
        if(auth()->user()->role=='cleaner'){
            return $next($request);
        }
        else{
            return redirect()->route(auth()->user()->role)->with("error','You don't have acaess");
        }
        
    }
}
