<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function showAll()
    {
        return Email::get(
        ['idEmail', 'Email', 'created_at', 'updated_at']
        );
    }
}
