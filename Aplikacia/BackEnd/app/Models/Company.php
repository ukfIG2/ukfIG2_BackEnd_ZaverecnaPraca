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

    public function sponsor()
    {
        return $this->hasMany(Sponsor::class, 'idCompany', 'idCompany');
    }

    public function said_about_us()
    {
        return $this->hasMany(Said_about_us::class, 'idCompany', 'idCompany');
    }
}
