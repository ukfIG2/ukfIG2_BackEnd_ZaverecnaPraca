<?php

namespace App\Http\Controllers;

use App\Models\Presentations;
use Illuminate\Http\Request;

class PresentationsController extends Controller
{
    public function showAll()
    {
        $presentations = Presentations::with('timetables')->get();

        $presentations->each(function ($presentation) {
            //$presentation->idTime_table = $presentation->TimeTables->Name;
            if ($presentation->timetables) {
                $presentation->Time_start = $presentation->timetables->Time_start;
                $presentation->Time_end = $presentation->timetables->Time_end;
            }
            unset($presentation->timetables);
        });

        return response()->json($presentations);
    }


}
