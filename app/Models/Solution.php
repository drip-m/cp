<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    //
    protected $fillable = [
        'title', 'class_id', 'description','image'
    ];

    public function class()
    {
        return $this->belongsTo(SolutionClass::class);
    }
}
