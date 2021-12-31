<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        if ( Auth::guard($guard)->check() ) {
            if($request->user()->cedec == '1'){
                return redirect('cedec.cedec');
            }elseif($request->user()->compdec == '1') {
                return redirect('compdec.compdec');
            }
            
        }

        return $next($request);
    }
}
