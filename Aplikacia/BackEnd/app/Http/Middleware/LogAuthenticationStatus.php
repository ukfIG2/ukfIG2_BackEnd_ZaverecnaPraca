<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LogAuthenticationStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        Log::info('Before request: Route: ' . $request->path());

        if (Auth::check()) {
            Log::info('Before request: User is authenticated. User ID: ' . Auth::id());
        } else {
            Log::warning('Before request: User is not authenticated.');
        }

        return $next($request);
    }

    public function terminate($request, $response)
    {
        Log::info('After request: Route: ' . $request->path());

        if (Auth::check()) {
            Log::info('After request: User is authenticated. User ID: ' . Auth::id());
        } else {
            Log::warning('After request: User is not authenticated.');
        }
    }
}
