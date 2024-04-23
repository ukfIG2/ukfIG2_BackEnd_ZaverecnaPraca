<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge_speakers_images extends Model
{
    use HasFactory;

    protected $table = 'Bridge_speakers_images';

    protected $primaryKey = 'idBridge';

    protected $fillable = [
        'idSpeakers',
        'idImages',
    ];

    public function speaker()
    {
        return $this->belongsTo(Speaker::class, 'idSpeakers', 'idSpeakers');
    }

    public function image()
    {
        return $this->belongsTo(Image::class, 'idImages', 'idImages');
    }
}
