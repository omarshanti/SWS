<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildsAttachment extends Model
{
    use HasFactory;

    protected $table = 'childs_attachments';
    protected $fillable = [
        'child_id',
        'file_name',
        'path',
    ];

    public function child()
    {
        return $this->belongsTo(ChildIdentification::class, 'child_id');
    }
}
