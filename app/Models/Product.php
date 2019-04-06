<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'class_id', 'image'
    ];

    // 与分类关联
    public function class()
    {
        return $this->belongsTo(ProductClass::class);
    }
}
