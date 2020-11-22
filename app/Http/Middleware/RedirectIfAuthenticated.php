<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        if (Auth::guard($guards)->check()) {
            switch ($guards) {
                case 'admins':
                    return redirect(RouteServiceProvider::HOMEADMIN);
                default:
                    if (auth()->user()->isCO==1) {
                        return redirect(RouteServiceProvider::HOMECO);
                    } else {
                        return redirect(RouteServiceProvider::HOMEUSER);
                    }
            }
        }
        return $next($request);
    }
}
