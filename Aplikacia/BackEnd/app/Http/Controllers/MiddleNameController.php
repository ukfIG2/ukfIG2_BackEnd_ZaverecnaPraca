<?php

namespace App\Http\Controllers;

use App\Models\Middle_name;
use Illuminate\Http\Request;

class MiddleNameController extends Controller
{
    public function showAll()
    {
        return response()->json(Middle_name::all());
    }
}
