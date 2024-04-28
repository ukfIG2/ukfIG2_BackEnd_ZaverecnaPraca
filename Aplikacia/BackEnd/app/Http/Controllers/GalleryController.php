<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Resources\GalleryAdminResource;

class GalleryController extends Controller
{
    public function showAll()
    {
        $gallery = Gallery::with('conference', 'image')->get();

        return GalleryAdminResource::collection($gallery);

    }

}
