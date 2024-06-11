<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request); // Proceed if authenticated
        }

        // Redirect to login if not authenticated
        return redirect()->route('login');
    }
}
