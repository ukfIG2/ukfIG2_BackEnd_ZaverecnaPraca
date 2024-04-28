<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge_presentations_speakers extends Model
{
    use HasFactory;

    protected $table = 'Bridge_presentations_speakers';

    protected $primaryKey = 'idBridge';

    protected $fillable = [
        'idPresentations',
        'idSpeakers',
    ];

    public function presentation()
    {
        return $this->belongsTo(Presentations::class, 'idPresentations', 'idPresentations');
    }

    public function speaker()
    {
        return $this->belongsTo(Speakers::class, 'idSpeakers', 'idSpeakers');
    }

}
