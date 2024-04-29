<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    public function showAll()
    {
        return Participants::with('title', 'firstName', 'middleName',
        'lastName')->get()->map(function ($participant) {
            return [
                'idParticipants' => $participant->idParticipants,
                'Short_title' => $participant->title->Short_title,
                'First_name' => $participant->firstName->First_name,
                'Middle_name' => $participant->middleName->Middle_name,
                'Last_name' => $participant->lastName->Last_name,
                'created_at' => $participant->created_at,
                'updated_at' => $participant->updated_at,
                'Email' => $participant->email->Email,
                'Conference' => $participant->conference->Title,
                'Comment' => $participant->Comment,
                'Token' => $participant->Token,
            ];
        });
    }

}
