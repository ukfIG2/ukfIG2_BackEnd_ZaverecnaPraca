<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PresentationsAdminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idPresentations' => $this->idPresentations,
            'ConferenceTitle' => optional(optional(optional($this->timetables)->stage)->conference)->Title,
            'StageName' => optional(optional($this->timetables)->stage)->Name,
            'Time_start' => optional($this->timetables)->Time_start,
            'Time_end' => optional($this->timetables)->Time_end,
            'Short_description' => $this->Short_description,
            'Long_description' => $this->Long_description,
            'Max_capacity' => $this->Max_capacity,
            'Comment' => $this->Comment,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'Speakers' => $this->speakers->map(function ($speaker) {
                return [
                    'Title' => optional($speaker->Title)->Title,
                    'First_name' => $speaker->firstName->First_name,
                    'Middle_name' => $speaker->middleName->Middle_name,
                    'Last_name' => $speaker->lastName->Last_name,
                    'Company' => optional($speaker->Company)->Company_name,
                    'Position' => optional($speaker->Position)->Position_name,
                ];
            })->all(),
        ];
    }
}
