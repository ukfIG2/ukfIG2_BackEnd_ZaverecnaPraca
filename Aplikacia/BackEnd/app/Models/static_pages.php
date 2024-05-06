<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class static_pages extends Model
{
    use HasFactory;

    protected $table = 'static_pages';

    protected $primaryKey = 'id_static_pages';

    protected $fillable = ['title', 'text'];
}
