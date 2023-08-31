<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildEducationStatus extends Model
{
    use HasFactory;

    protected $table = 'childs_edu_status';

    protected $fillable = [
        'child_id',
        'child_edu_level',
        'school_name',
        'need_lessons',
        'intensive_lessons',
        'cost_lesson',
        'hobbies',
    ];


    public function child()
    {
        return $this->belongsTo(ChildIdentification::class,'child_id','id');
    }
}
