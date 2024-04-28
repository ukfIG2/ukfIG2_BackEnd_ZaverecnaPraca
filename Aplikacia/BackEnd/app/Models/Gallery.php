<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'Gallery';

    protected $primaryKey = 'idGallery';

    protected $fillable = [
        'idConference',
        'idImages',
    ];

    public function conference()
    {
        return $this->belongsTo(Conference::class, 'idConference', 'idConference');
    }

    public function image()
    {
        return $this->belongsTo(Images::class, 'idImages', 'idImages');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
