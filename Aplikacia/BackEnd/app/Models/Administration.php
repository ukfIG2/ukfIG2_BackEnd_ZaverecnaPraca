<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;

    protected $table = 'Administration';

    protected $primaryKey = 'idAdministration';

    protected $fillable = [
        'Login',
        'Password',
        'Comment',
    ];

    // Make sure to hash the password when setting it
    public function setPasswordAttribute($value)
    {
        $this->attributes['Password'] = bcrypt($value);
    }
}
