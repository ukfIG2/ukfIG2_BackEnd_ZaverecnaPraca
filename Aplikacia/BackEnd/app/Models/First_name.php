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
}
