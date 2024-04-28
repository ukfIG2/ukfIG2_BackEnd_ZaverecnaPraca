<?php

namespace App\Http\Controllers;

use App\Models\Social_site;
use Illuminate\Http\Request;

class SocialSiteController extends Controller
{
    public function showAll()
    {
        $socialSites = Social_site::with('image:idImages,Path_to')->get();

        return $socialSites->map(function ($socialSite) {
            return [
                'idSocial_site' => $socialSite->idSocial_site,
                'Title' => $socialSite->Title,
                'Url' => $socialSite->Url,
                'Path_to' => $socialSite->image->Path_to,
                'created_at' => $socialSite->created_at,
                'updated_at' => $socialSite->updated_at,
            ];
        });
    }

            
}

