<?php

namespace App\Http\Controllers;

use App\Models\TimeTables;
use Illuminate\Http\Request;

class TimeTablesController extends Controller
{     
    public function showAll()
    {
        return TimeTables::with('stage')->get()->map(function ($timeTables) {
            return [
                'idTimeTables' => $timeTables->idTime_tables,
                'Conference_name' => $timeTables->stage->conference->Title,
                'Stage_name' => $timeTables->stage->Name,
                'Time_start' => $timeTables->Time_start,
                'Time_end' => $timeTables->Time_end,
                'Comment' => $timeTables->Comment,
                'created_at' => $timeTables->created_at,
                'updated_at' => $timeTables->updated_at,
            ];
        });

    }
}