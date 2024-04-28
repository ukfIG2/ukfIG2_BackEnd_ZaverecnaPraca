<?php

namespace App\Http\Controllers;

use App\Models\Last_name;
use Illuminate\Http\Request;

class LastNameController extends Controller
{
    public function showAll()
    {
        return Last_name::all();
    }
}
