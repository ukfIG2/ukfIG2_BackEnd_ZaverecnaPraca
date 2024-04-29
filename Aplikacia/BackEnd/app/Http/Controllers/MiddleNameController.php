<?php

namespace App\Http\Controllers;

use App\Models\Middle_name;
use Illuminate\Http\Request;

class MiddleNameController extends Controller
{
    public function showAll()
    {
        return Middle_name::get(
            ['idMiddle_name', 'Middle_name', 'created_at', 'updated_at']);
    }
}
