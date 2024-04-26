<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'Position';

    protected $primaryKey = 'idPosition';

    protected $fillable = [
        'Position_name',
    ];

    public function speakers()
    {
        return $this->hasMany(Speakers::class, 'idPosition', 'idPosition');
    }

    public function said_about_us()
    {
        return $this->hasMany(Said_about_us::class, 'idPosition', 'idPosition');
    }

    
}
