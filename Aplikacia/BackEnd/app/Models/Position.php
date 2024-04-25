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
}
