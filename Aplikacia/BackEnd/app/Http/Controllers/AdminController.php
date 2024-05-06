<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function register(){
        $data = request()->validate([
            'Login' => 'required|email|unique:Administration,Login',
            'Password' => 'required',
        ]);

        $data['Password'] = Hash::make($data['Password']);

        $admin = Administration::create($data);

        $token = $admin->createToken('authToken')->plainTextToken;

        $password = $data['Password'];

        return response(['admin' => $admin, 'token' => $token, 'password' => $password]);
    } 

    public function login(){
        $data = request()->validate([
            'Login' => 'required|email',
            'Password' => 'required',
        ]);

        $admin = Administration::where('Login', $data['Login'])->first();

        if (!$admin || !Hash::check($data['Password'], $admin->Password)) {
            return response(['message' => 'Invalid credentials'], 401);
        }

        $token = $admin->createToken('authToken')->plainTextToken;

        return response(['admin' => $admin, 'token' => $token]);
    }

    
    public function logout(){
        if (auth()->check()) {
            auth()->user()->tokens()->delete();
            return response(['message' => 'Logged out']);
        }

        return response(['message' => 'No authenticated user'], 401);
    }
    
}
