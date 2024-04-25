<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'Images';

    protected $primaryKey = 'idImages';

    protected $fillable = [
        'Title',
        'Path_to',
        'ALT',
    ];
}
