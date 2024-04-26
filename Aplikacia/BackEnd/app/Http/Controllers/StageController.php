<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function showAll()
    {
        $stages = Stage::with('conference')->get();

        $stages->each(function ($stage) {
            $stage->idConference = $stage->conference->Title;
            unset($stage->conference);
    });

    return response()->json($stages);
    }
}
