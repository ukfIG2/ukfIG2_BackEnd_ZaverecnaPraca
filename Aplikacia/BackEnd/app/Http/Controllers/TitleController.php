<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function showAll()
    {
        return Title::get(
            ['idTitle', 'Title', 'Short_title', 'created_at', 'updated_at']);
    }
}
