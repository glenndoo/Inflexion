<?php

namespace App\Http\Middleware;

use Closure;

class StudentMiddleware
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
        // dd($request->session()->get('info.status'));

        if($request->session()->get('info.status') == 1){
            return $next($request);
        }else{
            return response(view('welcome'));
        }
        
    }
}
