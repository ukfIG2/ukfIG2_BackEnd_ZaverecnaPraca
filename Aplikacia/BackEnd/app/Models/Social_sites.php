<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_sites extends Model
{
    use HasFactory;

    protected $table = 'Social_sites';

    protected $primaryKey = 'idSocial_sites';

    protected $fillable = [
        'Account',
        'idSocial_site',
    ];

    public function socialSite()
    {
        return $this->belongsTo(SocialSite::class, 'idSocial_site', 'idSocial_site');
    }
}
