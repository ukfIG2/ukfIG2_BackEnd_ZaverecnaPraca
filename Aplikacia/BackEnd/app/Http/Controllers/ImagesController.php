<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function showAll()
    {
        return Images::get(
            ['idImages', 'Title', 'Path_to', 'ALT', 'created_at', 'updated_at']);
    }
}
