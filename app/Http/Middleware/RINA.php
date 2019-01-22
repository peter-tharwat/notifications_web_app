<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RINA
{
 
    public function handle($request, Closure $next,$guard=NULL)
    {
        if(\Auth::guard($guard)->check())
            return $next($request);
        return redirect('/login');
    }
}
