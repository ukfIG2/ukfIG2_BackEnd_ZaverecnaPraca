<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function showAll()
    {
        $images = Images::all();

        return response()->json($images);
    }
}
