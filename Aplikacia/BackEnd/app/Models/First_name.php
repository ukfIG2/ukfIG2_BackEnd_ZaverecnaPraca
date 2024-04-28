<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First_name extends Model
{
    use HasFactory;

    protected $table = 'First_name';

    protected $primaryKey = 'idFirst_name';

    protected $fillable = [
        'First_name',
    ];

    public function participants()
    {
        return $this->hasMany(Participants::class, 'idFirst_name', 'idFirst_name');
    }

    public function speakers()
    {
        return $this->hasMany(Speakers::class, 'idFirst_name', 'idFirst_name');
    }

    public function said_about_us()
    {
        return $this->hasMany(Said_about_us::class, 'idFirst_name', 'idFirst_name');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

}
