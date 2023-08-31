<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildsResidentStatus extends Model
{
    use HasFactory;

    protected $table = 'childs_resident_status';

    protected $fillable = [
        'child_id',
        'resident_status',
        'resident_type',
        'resident_description',
        'resident_needs',
        'rent_cost',
        'no_rooms',
        'house_area',
    ];

    public function child()
    {
        return $this->belongsTo(ChildIdentification::class, 'child_id');
    }

}
