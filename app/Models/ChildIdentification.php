<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ChildIdentification extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'child_identification';

    protected $fillable = [
        'child_code',
        'child_fullName_en',
        'child_fullName_ar',
        'child_id_no',
        'gender',
        'category',
        'birth_date',
        'mother_fullName_en',
        'mother_fullName_ar',
        'mother_id_no',
        'mother_martial_status',
        'father_fullName_en',
        'father_fullName_ar',
        'father_id_no',
        'death_date',
        'has_disability',
        'disability_type',
        'sponsorship_category',
        'scale_of_poverty',
        'sr_id'
    ];
    protected $dates = ['deleted_at'];

    //relations
    public function user()
    {
        return $this->belongsTo(User::class, 'sr_id', 'id');
    }
    public function guardian()
    {
        return $this->hasOne(Guardian::class,'child_id','id');
    }
    public function family()
    {
        return $this->hasOne(FamiliesConfiguration::class,'child_id','id');
    }
    public function education()
    {
        return $this->hasOne(ChildEducationStatus::class,'child_id','id');
    }

    public function health()
    {
        return $this->hasOne(ChildHealthSituation::class,'child_id','id');
    }

    public function economic()
    {
        return $this->hasOne(ChildsEconomicStatus::class,'child_id','id');
    }

    public function resident ()
    {
        return $this->hasOne(ChildsResidentStatus::class,'child_id','id');
    }

    public function attachments ()
    {
        return $this->hasOne(ChildsAttachment::class,'child_id','id');
    }

    public function location ()
    {
        return $this->hasOne(ChildLocationData::class,'child_id','id');
    }
    public function childSummaryReports()
    {
        return $this->hasMany(ChildSummaryReport::class, 'child_id');
    }
}
