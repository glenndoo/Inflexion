<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CheckAccess
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
        // dd($request->session()->get('info',[0]));
        if($request->session()->get('info',[0]) == 1){
            return $next($request);
        }
            return $next($request);
        
        
    }
}
