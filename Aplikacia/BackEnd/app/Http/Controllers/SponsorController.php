<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
   public function showAll()
    {
        $sponsors = Sponsor::with(['conference', 'image'])
        ->get();

        $sponsors->transform(function ($sponsor) {
            $sponsor->Conference = $sponsor->conference->Title ?? null;
            $sponsor->Image = $sponsor->image->Path_to ?? null;

            unset($sponsor->conference, $sponsor->image);

            return $sponsor;
        });

        return response()->json($sponsors);
    }
}
