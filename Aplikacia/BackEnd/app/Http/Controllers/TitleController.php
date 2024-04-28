<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function showAll()
    {
        return response()->json(Title::all());
    }
}
