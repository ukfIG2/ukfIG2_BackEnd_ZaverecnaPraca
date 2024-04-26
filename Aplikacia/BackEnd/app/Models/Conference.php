<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    
    // The table associated with the model.
    protected $table = 'Conference';

    // The primary key associated with the table.
    protected $primaryKey = 'idConference';

    // The attributes that are mass assignable.
    protected $fillable = ['Title', 'Date', 'State', 'Comment'];

    // The attributes that should be cast to native types.
    protected $casts = [
        'Date' => 'datetime',
    ];
}
