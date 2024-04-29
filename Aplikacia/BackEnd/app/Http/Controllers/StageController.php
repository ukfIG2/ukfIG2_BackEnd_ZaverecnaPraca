<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function showAll()
    {
        return Stage::with('conference')->get()->map(function ($stage) {
            return [
                'idStage' => $stage->idStage,
                'Name' => $stage->Name,
                'Title_of_conference' => $stage->conference->Title,
                'Comment' => $stage->Comment,
                'created_at' => $stage->created_at,
                'updated_at' => $stage->updated_at,
            ];
        });
    }
}
