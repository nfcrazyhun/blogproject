<?php

namespace App\Http\Middleware;

use App\Http\Middleware\Authenticate;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMW
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
        //if not logged in
        if (!Auth::check()) {
            return redirect('/');
        }
        //if not admin
        if (!Auth::user()->isAdmin()) {
            return redirect('/');
        }

        //if everything OK (logged in && admin)
        return $next($request);
    }
}
