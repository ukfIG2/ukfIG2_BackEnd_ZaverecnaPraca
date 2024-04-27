<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Last_name extends Model
{
    use HasFactory;

    protected $table = 'Last_name';

    protected $primaryKey = 'idLast_name';

    protected $fillable = [
        'Last_name',
    ];

    public function participants()
    {
        return $this->hasMany(Participants::class, 'idLast_name', 'idLast_name');
    }

    public function speakers()
    {
        return $this->hasMany(Speakers::class, 'idLast_name', 'idLast_name');
    }
    
    public function said_about_us()
    {
        return $this->hasMany(Said_about_us::class, 'idLast_name', 'idLast_name');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
