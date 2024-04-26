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
}
