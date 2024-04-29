<?php

namespace App\Http\Controllers;

use App\Models\Presentations;
use Illuminate\Http\Request;

class PresentationsController extends Controller
{
    public function showAll()
    {
        return Presentations::with('timetables', 'speakers')->get()->map(function ($presentation) {
            return [
                'idPresentations' => $presentation->idPresentations,
                'Conference_name' => $presentation->timetables->stage->conference->Title,
                'Stage_name' => $presentation->timetables->stage->Name,
                'Time_tables' => $presentation->timetables->Time_start . ' - ' . $presentation->timetables->Time_end, // Added 'Time_tables' key to return 'Time_start' and 'Time_end' as a single string 'Time_start - Time_end
                'Name' => $presentation->Name,
                'Short_description' => $presentation->Short_description,
                'Long_description' => $presentation->Long_description,
                'Max_capacity' => $presentation->Max_capacity,
                'Comment' => $presentation->Comment,
                'created_at' => $presentation->created_at,
                'updated_at' => $presentation->updated_at,
                'Speakers' => $presentation->speakers->map(function ($speaker) {
                    return [
                        'Title' => optional($speaker->Title)->Short_title,
                        'First_name' => $speaker->firstName->First_name,
                        'Middle_name' => $speaker->middleName->Middle_name,
                        'Last_name' => $speaker->lastName->Last_name,
                        'Company' => optional($speaker->Company)->Company_name,
                        'Position' => optional($speaker->Position)->Position_name,
                    ];
                })->all(),
            ];
        });

    }
}