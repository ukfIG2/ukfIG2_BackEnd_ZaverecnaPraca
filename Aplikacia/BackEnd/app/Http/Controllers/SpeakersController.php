<?php

namespace App\Http\Controllers;

use App\Models\Speakers;
use Illuminate\Http\Request;

class SpeakersController extends Controller
{
    public function showAll()
    {
        $speakers = Speakers::with(['title', 'firstName', 'middleName', 'lastName', 'position', 'company'])
        ->get();

        $speakers->transform(function ($speaker) {
            $speaker->Short_title = $speaker->title->Short_title ?? null;
            $speaker->First_name = $speaker->firstName->First_name ?? null;
            $speaker->Middle_name = $speaker->middleName->Middle_name ?? null;
            $speaker->Last_name = $speaker->lastName->Last_name ?? null;
            $speaker->Position = $speaker->position->Position_name ?? null;
            $speaker->Company = $speaker->company->Company_name ?? null;

            unset($speaker->title, $speaker->firstName, $speaker->middleName, $speaker->lastName, $speaker->position, $speaker->company);

            return $speaker;
        });

        return response()->json($speakers);
    }
}
