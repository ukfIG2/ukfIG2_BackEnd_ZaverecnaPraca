<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $table = 'Stage';

    protected $primaryKey = 'idStage';

    protected $fillable = [
        'Name',
        'idConference',
        'Comment',
    ];

    public function conference()
    {   // Relationship between Stage and Conference
        //                      class conference    stage             conference
        return $this->belongsTo(Conference::class, 'idConference', 'idConference');
    }

    public function timeTables()
    {   
        return $this->hasMany(TimeTables::class, 'idStage', 'idStage');
    }
}
