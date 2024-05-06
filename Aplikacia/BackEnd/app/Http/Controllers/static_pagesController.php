<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\static_pages;

class static_pagesController extends Controller
{
    public function getTitleText($id)
    {
        $page = static_pages::where('id_static_pages', $id)->first();

        if ($page) {
            return $page->text;
        } else {
            return "No page found with ID: $id";
        }
    }
}
