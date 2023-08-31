<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildsEconomicStatus extends Model
{
    use HasFactory;
    protected $table = 'childs_economic_status';
    protected $fillable = [
        'child_id',
        'jobs_members',
        'periodic_sponsorships',
        'irregular_aids',
        'house_fees',
        'edu_fees',
        'rents',
        'medical_fees',
        'family_needs',
        'project_type',
        'project_cost',
        'notes',
    ];

    public function child()
    {
        return $this->belongsTo(ChildIdentification::class,'child_id','id');
    }
}
