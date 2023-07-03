<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CookieMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $myCookieValue = $request->cookie('__bpjph_ct');
        $refreshToken = $request->cookie('__bpjph_rt');

        if (!$myCookieValue || !$refreshToken) {
        
            return redirect("/"); 
        }
        return $next($request);
    }
}
