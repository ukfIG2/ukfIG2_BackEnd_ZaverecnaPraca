<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $table = 'Email';

    protected $primaryKey = 'idEmail';

    protected $fillable = [
        'Email',
    ];

    public function participants()
    {
        return $this->hasMany(Participants::class, 'idEmail', 'idEmail');
    }


}
