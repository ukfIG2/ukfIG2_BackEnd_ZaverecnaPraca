<?php

namespace App\Http\Controllers;

use App\Models\First_name;
use Illuminate\Http\Request;

class FirstNameController extends Controller
{
    public function showAll()
    {
        return response()->json(First_name::all());
    }
}
