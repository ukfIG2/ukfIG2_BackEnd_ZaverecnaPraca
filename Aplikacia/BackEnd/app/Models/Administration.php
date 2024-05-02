<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Administration extends Authenticatable
{
    use HasApiTokens, HasFactory; // Notifiable

    protected $table = 'Administration';

    protected $primaryKey = 'idAdministration';

    protected $fillable = [
        'Login',
        'Password',
        'Comment',
    ];

    protected $hidden = [
        'Password',
        'remember_token',
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

    public function getAuthPassword()
    {
        return $this->Password;
    }
}
