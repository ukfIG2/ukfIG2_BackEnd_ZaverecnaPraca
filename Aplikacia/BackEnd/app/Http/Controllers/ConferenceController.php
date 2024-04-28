<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{

    public function showAll()
    {
        return response()->json(Conference::all());
    }

}
