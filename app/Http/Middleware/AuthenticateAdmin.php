<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->guard('admin')->check()) {
            return redirect()->route('admin.login')->with('error', 'Please log in as admin');
        }

        return $next($request);
    }
}
