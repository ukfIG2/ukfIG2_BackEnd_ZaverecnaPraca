<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
   public function showAll()
    {
        return Sponsor::get()->map(function ($sponsor) {
            return [
                'idSponsor' => $sponsor->idSponsor,
                'Sponsor_name' => $sponsor->Sponsor_name,
                'Url' => $sponsor->Url,
                'Conference' => $sponsor->conference->Title,
                'Comment' => $sponsor->Comment,
                'Image' => $sponsor->image ? [
                    'Title' => $sponsor->image->Title,
                    'Path_to' => $sponsor->image->Path_to,
                    'ALT' => $sponsor->image->ALT,
                ] : null,
                'created_at' => $sponsor->created_at,
                'updated_at' => $sponsor->updated_at,
            ];
        });
                
    }
}
