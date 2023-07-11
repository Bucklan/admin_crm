<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Cookie::has('bearer_token')) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
