<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Adminmiddleware
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
        if(Auth::user()->usertype == 'admin')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status', 'You Are Not Allowed To AdminPage');
        }
        
    }
}
