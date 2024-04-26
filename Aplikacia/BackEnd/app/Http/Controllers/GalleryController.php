<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showAll()
    {
        $gallery = Gallery::with('image')->get(); // Use Eloquent's eager loading to include the related Image

        return response()->json($gallery);
    }


}
