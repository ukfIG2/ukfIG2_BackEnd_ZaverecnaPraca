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
    
}
