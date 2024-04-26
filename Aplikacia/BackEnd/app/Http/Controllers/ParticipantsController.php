<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    public function showAll()
    {
        $participants = Participants::with(['title', 'firstName', 'middleName', 'lastName', 'conference', 'email'])
        ->get();

        $participants->transform(function ($participant) {
            $participant->Short_title = $participant->title->Short_title ?? null;
            $participant->First_name = $participant->firstName->First_name ?? null;
            $participant->Middle_name = $participant->middleName->Middle_name ?? null;
            $participant->Last_name = $participant->lastName->Last_name ?? null;
            $participant->Conference = $participant->conference->Title ?? null;
            $participant->Email = $participant->email->Email ?? null;

            unset($participant->title, $participant->firstName, $participant->middleName, $participant->lastName, $participant->conference, $participant->email);

            return $participant;
        });

        return response()->json($participants);
    }
}
