<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */

    public function handle($request, Closure $next, ...$roles) { 
        // Check if the user is authenticated 
        if (!Auth::check()) { 
            // Redirect to home if not authenticated 
            return redirect()->route('welcome'); } 
            // Check if the authenticated user's role is in the allowed roles 
            if (!in_array(Auth::user()->role, $roles)) 
            { 
                // Redirect to home if unauthorized return 
                redirect()->route('welcome'); 
            } 
            // Proceed with the next middleware or request 
            return $next($request);
         }
}