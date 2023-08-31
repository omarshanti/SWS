<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildSummaryReport extends Model
{
    use HasFactory;

    protected $table = 'child_summary_reports';

    protected $fillable = [
        'child_id',
        'family_situation'
    ];

    public function childIdentification()
    {
        return $this->belongsTo(ChildIdentification::class, 'child_id');
    }

}

