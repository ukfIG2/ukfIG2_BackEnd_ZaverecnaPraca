<?php

namespace App\Http\Controllers;

use App\Models\First_name;
use Illuminate\Http\Request;

class FirstNameController extends Controller
{
    public function showAll()
    {
        return First_name::get(
            ['idFirst_name', 'First_name', 'created_at', 'updated_at']
        );
    }
}
