<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{

    public function showAll()
    {
        return Conference::get(
            ['idConference', 'Title', 'Date', 'State', 'Comment', 'created_at', 'updated_at']
        );
    }

}
