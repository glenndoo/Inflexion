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
        if(!empty($request->session()->get('info.status')) || $request->session()->get('info.status') == 1){
            return $next($request);
        }
            return $next($request);
        
        
    }
}
