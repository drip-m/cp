<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

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

    public static function getSolutionList($limit)
    {
        return DB::table('solutions')->limit($limit)->get();
    }

    public static function getSolutionByID($id)
    {
        return DB::table('solutions')->find($id);
    }

    public static function getSolutions($limit='', $class='')
    {
        $where = $class ? ' where class_id = ' . $class : '';
        $num = $limit ? ' limit ' . $limit : '';
        $solutions = DB::select('select * from solutions' . $where . $num);
        return $solutions;
    }
}
