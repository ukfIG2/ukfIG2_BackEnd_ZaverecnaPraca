<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showAll()
    {
        return Gallery::get()->map(function ($gallery) {
            return [
                'idGallery' => $gallery->idGallery,
                'Conference' => $gallery->Conference->Title,
                'Path_to' => $gallery->image->Path_to,
                'ALT' => $gallery->image->ALT,
                'created_at' => $gallery->created_at,
                'updated_at' => $gallery->updated_at,
            ];
        });
    }
    /*
        public function showAll()
        {
            return Gallery::get()->map(function ($gallery) {
                return [
                    'idGallery' => $gallery->idGallery,
                    'Conference' => $gallery->Conference->Title,
                    'Images' => [
                        [
                            'Path_to' => $gallery->image->Path_to,
                            'ALT' => $gallery->image->ALT,
                        ],
                    ],
                    'created_at' => $gallery->created_at,
                    'updated_at' => $gallery->updated_at,
                ];
            });
        }*/
    

}
