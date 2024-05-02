<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administration extends Authenticatable
{
    use HasFactory, HasApiTokens; #Notifiable

    protected $table = 'Administration';

    protected $primaryKey = 'idAdministration';

    protected $fillable = [
        'Login',
        'Password',
        'Comment',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['Password'] = bcrypt($value);
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
