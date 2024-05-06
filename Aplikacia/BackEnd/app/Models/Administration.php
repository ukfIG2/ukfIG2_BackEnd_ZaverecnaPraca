<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Administration extends Authenticatable
{
    use HasFactory, HasApiTokens; //Notifiable

    protected $table = 'Administration';

    protected $primaryKey = 'idAdministration';

    protected $fillable = [
        'Login',
        'Password',
        'Comment',
    ];

    // Make sure to hash the password when setting it
    /*public function setPasswordAttribute($value)
    {
        $this->attributes['Password'] = bcrypt($value);
    }*/

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
