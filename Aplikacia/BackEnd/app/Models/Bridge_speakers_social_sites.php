<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge_speakers_social_sites extends Model
{
    use HasFactory;

    protected $table = 'Bridge_speakers_socialSites';

    protected $primaryKey = 'idBridge';

    protected $fillable = [
        'idSpeakers',
        'idSocial_sites',
        'Account',
    ];

    public function speaker()
    {
        return $this->belongsTo(Speakers::class, 'idSpeakers', 'idSpeakers');
    }

    public function socialSite()
    {
        return $this->belongsTo(Social_site::class, 'idSocial_sites', 'idSocial_sites');
    }
}
