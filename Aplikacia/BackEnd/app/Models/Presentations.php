<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentations extends Model
{
    use HasFactory;

    protected $table = 'Presentations';

    protected $primaryKey = 'idPresentations';

    protected $fillable = [
        'Name',
        'Short_description',
        'Long_description',
        'Max_capacity',
        'idTime_tables',
        'Comment',
    ];

    public function timetables()
    {
        return $this->belongsTo(TimeTables::class, 'idTime_tables', 'idTime_tables');
    }

    public function bridge_presentations_speakers()
    {
        return $this->hasMany(Bridge_presentations_speakers::class, 'idBridge', 'idBridge');
    }   
}
