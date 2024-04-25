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
    
}
