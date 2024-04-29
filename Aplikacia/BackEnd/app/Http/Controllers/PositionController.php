<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function showAll()
    {
        return Position::get(
            ['idPosition', 'Position_name', 'created_at', 'updated_at']
        );
    }
}
