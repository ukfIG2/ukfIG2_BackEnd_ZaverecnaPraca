<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $table = 'Sponsor';

    protected $primaryKey = 'idSponsor';

    protected $fillable = [
        'Sponsor_name',
        'Url',
        'idConference',
        'idImages',
        'Comment',
    ];

    public function conference()
    {
        return $this->belongsTo(Conference::class, 'idConference', 'idConference');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'idImages', 'idImages');
    }
}
