<?php

namespace App\Http\Middleware;

use Closure;

class AcessoCedec
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
        if(auth()->check() and $request->user()->cedec == "1"){
            return $next($request); 
            
            return redirect('cedec.cedec');
        }
        return redirect('/');
        

 
             
    }
}
