<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $table = 'Title';

    protected $primaryKey = 'idTitle';

    protected $fillable = [
        'Title',
        'Short_title',
    ];

    public function participants()
    {
        return $this->hasMany(Participants::class, 'idTitle', 'idTitle');
    }

    public function speakers()
    {
        return $this->hasMany(Speakers::class, 'idTitle', 'idTitle');
    }

    public function said_about_us()
    {
        return $this->hasMany(Said_about_us::class, 'idTitle', 'idTitle');
    }

}
