<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamiliesConfiguration extends Model
{
    use HasFactory;

    protected $table = 'families_configuration';
    protected $fillable = [
        'child_id',
        'members_count',
        'members_university',
        'members_school',
        'members_worker',
        'relatives',
    ];
    protected $casts = [
        'relatives' => 'array'
    ];
    public function child()
    {
        return $this->belongsTo(ChildIdentification::class,'child_id','id');
    }
}
