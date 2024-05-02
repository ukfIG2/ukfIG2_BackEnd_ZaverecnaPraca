<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function showAll()
    {
        return Administration::get(
            ['idAdministration', 'Login', 'Password', 
            'Comment', 'created_at', 'updated_at']);
    }
    
}
