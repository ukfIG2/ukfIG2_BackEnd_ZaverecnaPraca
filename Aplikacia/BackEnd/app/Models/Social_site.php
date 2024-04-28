<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_site extends Model
{
    use HasFactory;

    protected $table = 'Social_site';

    protected $primaryKey = 'idSocial_site';

    protected $fillable = [
        'Title',
        'Url',
        'idImages',
    ];

    public function image()
    {
        return $this->belongsTo(Images::class, 'idImages', 'idImages');
    }

    public function bridge_speakers_social_site()
    {
        return $this->hasMany(Bridge_speakers_social_sites::class, 'idSocial_site', 'idSocial_site');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
