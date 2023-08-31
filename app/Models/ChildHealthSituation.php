<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildHealthSituation extends Model
{
    use HasFactory;

    protected $table = 'child_health_situation';

    protected $fillable = [
        'child_id',
        'good_health',
        'has_disease',
        'patients',
        'medications',
    ];

    protected $casts = [
        'patients' => 'array',
    ];

    public function child()
    {
        return $this->belongsTo(ChildIdentification::class,'child_id','id');
    }


}
