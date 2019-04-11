<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

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

    public static function getDownloads($limit='', $class='')
    {
        $where = $class ? ' where class_id = ' . $class : '';
        $num = $limit ? ' limit ' . $limit : '';
        $downloads = DB::select('select * from downloads' . $where . $num);
        return $downloads;
    }
}
