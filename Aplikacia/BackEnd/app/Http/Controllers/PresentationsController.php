<?php

namespace App\Http\Controllers;

use App\Models\Presentations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB; // Import DB facade for query logging

class PresentationsController extends Controller
{
    public function showAll()
    {
        // Enable query logging
        DB::enableQueryLog();

        $presentations = Presentations::with([
            'timetables', 
            'timetables.stage', 
            'timetables.stage.conference',
            'speakers.title',
            'speakers.firstName',
            'speakers.middleName',
            'speakers.lastName',
            'speakers.company',
            'speakers.position'
        ])->get();

        // Log the presentations data
        //Log::info('Presentations data:', ['data' => $presentations->toArray()]);

        $presentations->each(function ($presentation) {
            if ($presentation->timetables) {
                $presentation->Time_start = $presentation->timetables->Time_start;
                $presentation->Time_end = $presentation->timetables->Time_end;
                $presentation->idStage = $presentation->timetables->stage->Name;
                $presentation->idConference = $presentation->timetables->stage->conference->Title;
            }

            $presentation->Title = null;
            $presentation->First_name = null;
            $presentation->Middle_name = null;
            $presentation->Last_name = null;
            $presentation->Company = null;
            $presentation->Position = null;

            if ($presentation->speakers) {
                foreach ($presentation->speakers as $speaker) {
                    $presentation->Title = $speaker->Title ?? null;
                    $presentation->First_name = $speaker->firstName  ?? null;
                    $presentation->Middle_name = $speaker->middleName ?? null;
                    $presentation->Last_name = $speaker->lastName ?? null;
                    $presentation->Company = $speaker->Company ?? null;
                    $presentation->Position = $speaker->Position ?? null;
                }
            }

            unset($presentation->timetables, $presentation->speakers);
        });

        // Log the executed queries
        //Log::info('Executed queries:', ['queries' => DB::getQueryLog()]);
        

        return response()->json($presentations);
    }
}