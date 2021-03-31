<?php

namespace App\Http\Middleware;

use Closure;

class TutorMiddleware
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
        if($request->session()->get('info.status') == 2){
            return $next($request);
        }else{
            return redirect()->back()->with('Errors', 'You are not allowed to view that page');
        }
    }
}
