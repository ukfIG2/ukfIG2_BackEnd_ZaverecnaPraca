<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'Images';

    protected $primaryKey = 'idImages';

    protected $fillable = [
        'Title',
        'Path_to',
        'ALT',
    ];

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'idImages', 'idImages');
    }

    public function social_sites()
    {
        return $this->hasMany(Social_site::class, 'idImages', 'idImages');
    }

    public function bridge_speakers_images()
    {
        return $this->hasMany(Bridge_speakers_images::class, 'idImages', 'idImages');
    }

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class, 'idImages', 'idImages');
    }

    public function said_about_us()
    {
        return $this->hasMany(Said_about_us::class, 'idImages', 'idImages');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function speakers()
    {
        return $this->belongsToMany(Speakers::class, 'Bridge_speakers_images', 'idImages', 'idSpeakers');
    }
}
