<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildLocationData extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'longitude',
        'latitude',
    ];

    public function child()
    {
        return $this->belongsTo(ChildIdentification::class);
    }
}
