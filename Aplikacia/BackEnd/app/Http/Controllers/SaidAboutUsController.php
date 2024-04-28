<?php

namespace App\Http\Controllers;

use App\Models\Said_about_us;
use Illuminate\Http\Request;

class SaidAboutUsController extends Controller
{
        public function showAll()
        {
            $saidAboutUsRecords = Said_about_us::with(['title', 'firstName', 'middleName', 'lastName', 'image'])
            ->get();
    
            $saidAboutUsRecords->transform(function ($record) {
                $record->Title = $record->title->Short_title ?? null;
                $record->FirstName = $record->firstName->First_name ?? null;
                $record->MiddleName = $record->middleName->Middle_name ?? null;
                $record->LastName = $record->lastName->Last_name ?? null;
                $record->Image = $record->image->Path_to ?? null;
    
                unset($record->title, $record->firstName, $record->middleName, $record->lastName, $record->image);
    
                return $record;
            });
    
            return response()->json($saidAboutUsRecords);
        } 
    
}
