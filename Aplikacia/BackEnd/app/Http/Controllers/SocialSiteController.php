<?php

namespace App\Http\Controllers;

use App\Models\Social_site;
use Illuminate\Http\Request;

class SocialSiteController extends Controller
{
    public function showAll()
    {
        return Social_site::with('image')->get()->map(function ($social_site) {
            return [
                'idSocial_site' => $social_site->idSocial_site,
                'Title' => $social_site->Title,
                'Url' => $social_site->Url,
                'created_at' => $social_site->created_at,
                'updated_at' => $social_site->updated_at,
                'Images' => $social_site->image ? [
                    'Title' => $social_site->image->Title,
                    'Path_to' => $social_site->image->Path_to,
                    'ALT' => $social_site->image->ALT,
                ] : null,
            ];
        });
    }

            
}

