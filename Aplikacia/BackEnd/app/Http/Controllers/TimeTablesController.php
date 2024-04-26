<?php

namespace App\Http\Controllers;

use App\Models\TimeTables;
use Illuminate\Http\Request;

class TimeTablesController extends Controller
{     
    public function showAll()
    {
        $timeTables = TimeTables::with('stage')->get();

        $timeTables->each(function ($timeTable) {
            $timeTable->idStage = $timeTable->stage->Name;
            unset($timeTable->stage);
        });

        return response()->json($timeTables);
    }
}