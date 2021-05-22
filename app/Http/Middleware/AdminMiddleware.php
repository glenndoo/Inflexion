<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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

        if($request->session()->get('info.status') == 0){
            return $next($request);
        }else{
            return redirect()->back()->with('Errors', 'You are not allowed to access that page');
        }
        
    }
}
