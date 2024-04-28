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

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
