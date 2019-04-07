<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class DownloadClass extends Model
{
    //
    protected $fillable = [
        'title'
    ];

    public function download()
    {
        return $this->hasMary(Download::class);
    }

    // 获取所有的分类
    public static function getClass()
    {
        $class = DB::table('download_classes')->get();
        $options = [];

        foreach ($class as $c) {
            $options[$c->id] = $c->title;
        }
        return $options;
    }
}
