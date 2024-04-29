<?php

namespace App\Http\Controllers;

use App\Models\Speakers;
use Illuminate\Http\Request;

class SpeakersController extends Controller
{
    /*ublic function showAll()
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
    }*/

    public function showAll()
    {
        return Speakers::with('title', 'firstName', 'middleName',
         'lastName', 'position', 'company')->get()->map(function ($speaker) {
            return [
                'idSpeaker' => $speaker->idSpeakers,
                #'Title' => $speaker->title->Title,
                'Short_title' => $speaker->title->Short_title,
                'First_name' => $speaker->firstName->First_name,
                'Middle_name' => $speaker->middleName->Middle_name,
                'Last_name' => $speaker->lastName->Last_name,
                'Position' => $speaker->position->Position_name,
                'Company' => $speaker->company->Company_name,
                'created_at' => $speaker->created_at,
                'updated_at' => $speaker->updated_at,
                'Short_description' => $speaker->Short_description,
                'Long_description' => $speaker->Long_description,
                'Comment' => $speaker->Comment,
                'Image' => $speaker->images ? $speaker->images->map(function ($image) {
                    return [
                        'Title' => $image->Title,
                        'Path_to' => $image->Path_to,
                        'ALT' => $image->ALT,
                    ];
                }) : null,
                
                'Social_sites' => $speaker->social_sites ? $speaker->social_sites->map(function ($social_site) {
                    return [
                        'Title' => $social_site->Title,
                        'Url' => $social_site->Url,
                    ];
                }) : null,
            ];
        });
    }

}
