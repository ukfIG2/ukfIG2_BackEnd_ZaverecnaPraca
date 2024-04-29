<?php

namespace App\Http\Controllers;

use App\Models\Said_about_us;
use Illuminate\Http\Request;

class SaidAboutUsController extends Controller
{
        public function showAll()
        {
            return Said_about_us::with('title', 'firstName', 'middleName',
            'lastName')->get()->map(function ($said_about_us) {
                return [
                    'idSaid_about_us' => $said_about_us->idSaid_about_us,
                    'Short_title' => $said_about_us->title->Short_title,
                    'First_name' => $said_about_us->firstName->First_name,
                    'Middle_name' => $said_about_us->middleName->Middle_name,
                    'Last_name' => $said_about_us->lastName->Last_name,
                    'Image' => $said_about_us->Image ? [
                        'Title' => $said_about_us->Image->Title,
                        'Path_to' => $said_about_us->Image->Path_to,
                        'ALT' => $said_about_us->Image->ALT,
                    ] : null,
                    'Text' => $said_about_us->Text,
                    'Company' => $said_about_us->Company->Company_name,
                    'Position' => $said_about_us->Position->Position_name,
                    'Comment' => $said_about_us->Comment,
                    'created_at' => $said_about_us->created_at,
                    'updated_at' => $said_about_us->updated_at,
                ];
            });
        }
    
}
