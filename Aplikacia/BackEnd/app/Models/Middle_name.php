<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Middle_name extends Model
{
    use HasFactory;

    protected $table = 'Middle_name';

    protected $primaryKey = 'idMiddle_name';

    protected $fillable = [
        'Middle_name',
    ];
    
    public function participants()
    {
        return $this->hasMany(Participants::class, 'idMiddle_name', 'idMiddle_name');
    }

    public function speakers()
    {
        return $this->hasMany(Speakers::class, 'idMiddle_name', 'idMiddle_name');
    }

    public function said_about_us()
    {
        return $this->hasMany(Said_about_us::class, 'idMiddle_name', 'idMiddle_name');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
