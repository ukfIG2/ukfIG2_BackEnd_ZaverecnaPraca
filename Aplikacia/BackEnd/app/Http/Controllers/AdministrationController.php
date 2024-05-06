<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade


class AdministrationController extends Controller
{
    /*public function showAll()
    {
        return Administration::get(
            ['idAdministration', 'Login', 'Password', 
            'Comment', 'created_at', 'updated_at']);
    }*/

    public function showAll()
    {
        // Check if a user is authenticated
        if (!Auth::check()) {
            // If not, return a response indicating that authentication is required
            return response()->json(['error' => 'Unauthenticated Administration controller'], 401);
        }

        // If a user is authenticated, retrieve and return the administrations
        return Administration::get(
            ['idAdministration', 'Login', 'Password', 
            'Comment', 'created_at', 'updated_at']);
    }

}
