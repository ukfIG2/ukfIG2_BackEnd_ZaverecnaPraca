<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Administration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            $user = new Administration();
            $user->Login = $request->Login;
            $user->Password = Hash::make($request->Password);
            $user->save();

            $success = true;
            $message = 'User register successfully';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
            'user' => [
                'login' => $user->Login,
                'password' => $user->Password,
            ],
        ];
        return response()->json($response);    }


/*
public function login(Request $request)
{
    $credentials = $request->only('Login', 'Password');

    $authSuccess = Auth::attempt($credentials);

    if (!$authSuccess) {
        return response()->json([
            'error' => 'Unauthorized',
            'login' => $credentials['Login'],
            'password' => $credentials['Password'], // Not recommended
            'authSuccess' => $authSuccess,
        ], 401);
    }

    $response = [
        'success' => true,
        'message' => 'Logged in successfully',
        'authSuccess' => $authSuccess,
        'login' => $credentials['Login'],
        'password' => $credentials['Password'], // Not recommended
    ];

    return response()->json($response);
}
*/


public function login(Request $request)
{
    $credentials = $request->only('Login', 'Password');

    $user = Administration::where('Login', $credentials['Login'])->first();

    if ($user && Hash::check($credentials['Password'], $user->Password)) {
        // The passwords match...
        session(['user_id' => $user->idAdministration]);

        $response = [
            'success' => true,
            'message' => 'Logged in successfully',
            'login' => $credentials['Login'],
        ];
    } else {
        // The passwords do not match or the user does not exist...
        $response = [
            'error' => 'Unauthorized',
            'login' => $credentials['Login'],
            'password' => $credentials['Password'], // Not recommended
        ];
    }

    $response = response()->json($response);

    // Log the headers
    Log::info($response->headers->all());

    // Log the session data
    Log::info('Session data: ' . print_r(session()->all(), true));

    // Log the Set-Cookie header
    Log::info($response->headers->get('Set-Cookie'));

    return $response;
}

    /**
     * Logout
     */
    public function logout()
    {
        try {
            Session::flush();
            $success = true;
            $message = 'Successfully logged out';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }
}
