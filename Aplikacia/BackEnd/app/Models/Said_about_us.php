<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Said_about_us extends Model
{
    use HasFactory;

    protected $table = 'Said_about_us';

    protected $primaryKey = 'idSaid_about_us';

    protected $fillable = [
        'idTitle',
        'idFirst_name',
        'idMiddle_name',
        'idLast_name',
        'idImages',
        'Text',
        'idCompany',
        'idPosition',
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

    public function image()
    {
        return $this->belongsTo(Images::class, 'idImages', 'idImages');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'idCompany', 'idCompany');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'idPosition', 'idPosition');
    }
}
