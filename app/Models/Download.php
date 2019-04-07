<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    //
    protected $fillable = [
        'class_id', 'title', 'url'
    ];

    public function class()
    {
        return $this->belongsTo(DownloadClass::class);
    }
}
