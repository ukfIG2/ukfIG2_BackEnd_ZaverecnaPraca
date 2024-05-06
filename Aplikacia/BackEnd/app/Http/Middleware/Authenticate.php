<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Administration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Authenticate
{
    
public function handle($request, Closure $next)
{
    // Log the current route
    Log::info('Authenticate middleware executed for route: ' . $request->path());

    $user_id = session('user_id');

    if ($user_id) {
        $user = Administration::find($user_id);

        if ($user) {
            Auth::login($user);
            if ($user) {
                Auth::login($user);
                Log::info('User authorized: ' . $user->name); // Add log statement to log the authorization
            }
        } else {
            return $this->unauthenticated($request, ['auth']);
        }
    } else {
        return $this->unauthenticated($request, ['auth']);
    }

    return $next($request);
}


    protected function unauthenticated($request, array $guards)
    {
        return $request->expectsJson()
            ? response()->json(['message' => 'Unauthenticated.'], 401)
            : redirect()->guest(route('login'));
    }
}