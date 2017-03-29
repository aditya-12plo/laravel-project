<?php

namespace laravel\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }
    //If request comes from logged in seller, he will
      //be redirected to seller's home page.
      if (Auth::guard('admins')->check()) {
          return redirect('/admin/beranda');
      }

        return $next($request);
    }
}
