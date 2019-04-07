<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class SolutionClass extends Model
{
    //
    protected $fillable = ['title'];

    public function solution()
    {
        return $this->hasMany(Solution::class);
    }

    // 获取所有的方案分类
    public function getClass()
    {
        $class = DB::table('solution_classes')->get();
        $options = [];
        foreach ($class as $c) {
            $options[$c->id] = $c->title;
        }
        return $options;
    }
}
