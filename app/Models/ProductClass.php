<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductClass extends Model
{
    //
    protected $fillable = [
        'title'
    ];

    // 与商品关联
    public function prodcut()
    {
        return $this->hasMany(Product::class);
    }
}
