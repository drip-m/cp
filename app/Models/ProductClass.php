<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

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

    // 查询所有的分类
    public static function getClass()
    {
        $class = DB::table('product_classes')->get();
        $options = [];
        foreach ($class as $c) {
            $options[$c->id] = $c->title;
        }
        return $options;
    }
}
