<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge_presentations_participant extends Model
{
    use HasFactory;

    protected $table = 'Bridge_presentations_participant';

    protected $primaryKey = 'idBridge';

    protected $fillable = [
        'idPresentations',
        'idParticipants',
    ];

    public function presentation()
    {
        return $this->belongsTo(Presentations::class, 'idPresentations', 'idPresentations');
    }

    public function participant()
    {
        return $this->belongsTo(Participants::class, 'idParticipants', 'idParticipants');
    }
}
