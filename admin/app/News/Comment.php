<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [];
    public $timestamps = false;

    public function getComments($id){
        return self::where('news_id', $id)->get();
    }
}
