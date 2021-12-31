<?php

namespace App\Http\Middleware;

use Closure;

class AcessoCompdec
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
        if(auth()->check() and $request->user()->compdec == "1"){
            return $next($request);
            
            return redirect('compdec.compdec');
        }
        return redirect('/');
        
           
    }
}
