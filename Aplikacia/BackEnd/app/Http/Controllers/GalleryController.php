<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showAll()
    {
        $gallery = Gallery::with('conference', 'image')->get();

        $gallery = $gallery->map(function ($item) {
            return [
                'idGallery' => $item->idGallery,
                'conference_title' => $item->conference->Title,
                'image_path' => $item->image->Path_to,
                'image_alt' => $item->image->ALT,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
            ];
        });

        return response()->json($gallery);
    }

}
