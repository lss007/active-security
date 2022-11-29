<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
    if(Auth::check() && Auth::user()->role_id === 1 ) {
        return $next($request);
      
        }
        elseif(Auth::check() && Auth::user()->role_id === 3){
            return $next($request);

       }
    else {
        // abort(403, 'Access denied');
            Auth::guard('web')->logout();
            $request->session()->invalidate();  
            $request->session()->regenerateToken();
        return redirect()->route('login')->with('status', 'Access denied');
    }
     
     
    }
}
