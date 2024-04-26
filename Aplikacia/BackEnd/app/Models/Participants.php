<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;

    protected $table = 'Participants';

    protected $primaryKey = 'idParticipants';

    protected $fillable = [
        'idTitle',
        'idFirst_name',
        'idMiddle_name',
        'idLast_name',
        'idConference',
        'idEmail',
        'Token',
    ];

    public function title()
    {
        return $this->belongsTo(Title::class, 'idTitle', 'idTitle');
    }

    public function firstName()
    {
        return $this->belongsTo(First_name::class, 'idFirst_name', 'idFirst_name');
    }

    public function middleName()
    {
        return $this->belongsTo(Middle_name::class, 'idMiddle_name', 'idMiddle_name');
    }

    public function lastName()
    {
        return $this->belongsTo(Last_name::class, 'idLast_name', 'idLast_name');
    }

    public function conference()
    {
        return $this->belongsTo(Conference::class, 'idConference', 'idConference');
    }

    public function email()
    {
        return $this->belongsTo(Email::class, 'idEmail', 'idEmail');
    }

    public function bridge_presentations_participant()
    {
        return $this->hasMany(Bridge_presentations_participant::class, 'idParticipants', 'idParticipants');
    }
}
