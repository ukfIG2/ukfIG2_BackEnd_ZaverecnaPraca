<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'Company';

    protected $primaryKey = 'idCompany';

    protected $fillable = [
        'Company_name',
    ];

    public function speakers()
    {
        return $this->hasMany(Speakers::class, 'idCompany', 'idCompany');
    }

    public function said_about_us()
    {
        return $this->hasMany(Said_about_us::class, 'idCompany', 'idCompany');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
