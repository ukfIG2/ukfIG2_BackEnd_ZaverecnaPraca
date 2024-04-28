<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryAdminResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idGallery' => $this->idGallery,
            'conference_title' => $this->conference->Title,
            'image_path' => $this->image->Path_to,
            'image_alt' => $this->image->ALT,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
