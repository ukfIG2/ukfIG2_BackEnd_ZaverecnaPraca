<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    use HasFactory;

    protected $table = 'Speakers';

    protected $primaryKey = 'idSpeakers';

    protected $fillable = [
        'idTitle',
        'idFirst_name',
        'idMiddle_name',
        'idLast_name',
        'idPosition',
        'idCompany',
        'Short_description',
        'Long_description',
        'Comment',
    ];

    public function title()
    {
        return $this->belongsTo(Title::class, 'idTitle', 'idTitle');
    }

    public function firstName()
    {
        return $this->belongsTo(First_name::class, 'idFirst_name', 'idFirst_name');
    }

    public function middleName()
    {
        return $this->belongsTo(Middle_name::class, 'idMiddle_name', 'idMiddle_name');
    }

    public function lastName()
    {
        return $this->belongsTo(Last_name::class, 'idLast_name', 'idLast_name');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'idPosition', 'idPosition');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'idCompany', 'idCompany');
    }
}
