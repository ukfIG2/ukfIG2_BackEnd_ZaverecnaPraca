<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTables extends Model
{
    use HasFactory;

    protected $table = 'Time_tables';

    protected $primaryKey = 'idTime_tables';

    protected $fillable = [
        'Time_start',
        'Time_end',
        'idStage',
        'Comment',
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class, 'idStage', 'idStage');
    }

    public function presentations()
    {
        return $this->hasMany(Presentations::class, 'idTime_tables', 'idTime_tables');
    }
    
}
