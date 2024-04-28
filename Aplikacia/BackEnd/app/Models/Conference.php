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

    public function stages()
    {
        return $this->hasMany(Stage::class, 'idConference');
    }

    public function participants()
    {
        return $this->hasMany(Participants::class, 'idConference');
    }

    public function sponsor()
    {
        return $this->hasMany(Sponsor::class, 'idConference');
    }

    public function galery()
    {
        return $this->hasMany(Gallery::class, 'idConference');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
