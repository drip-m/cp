<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

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

    public static function getProdcuts($limit='', $class='', $title= '')
    {
        $where = ' where 1=1 ';
        $where .= $class ? " AND class_id = " . $class : "";
        if (!empty($title)) {
            $where .= " AND title = '" . $title . "'";
        }
        $num = $limit ? ' limit ' . $limit : '';
        $products = DB::select('select * from products ' . $where . $num);
        return $products;
    }

    public static function getProductByID($id)
    {
        return DB::table('products')->find($id);
    }
}
