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
}
