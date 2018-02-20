<?php

namespace App\News;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class News extends Model
{

    protected $table = 'news';

    public $timestamps = false;

    protected $guarded = [];

    public static function deleteBulk(Request $r)
    {
        $newsS = self::all();

        $deletable = [];

        //  To store deleted galleries
        $deleted = [];

        //  To store unDeletable galleries
        $unDeleted = [];


        $i = 0;

        foreach ($newsS as $news) {

            if ($r->input('newsId' . $news->id)) {
                $deletable[$i++] = $news->id;
            }


        }

        $deletedCounter = 0;
        $unDeletedCounter = 0;
        foreach ($deletable as $d) {
            if (self::find($d)->delete()) {
                $deleted[$deletedCounter++] = $d;
            } else {
                $unDeleted[$unDeletedCounter++] = $d;
            }
        }


        return [$unDeleted , $deleted];
    }


    public function newsPager(Request $r)
    {

        $offSet = $r->input('limit') * 4;

        $limitedNews = DB::table(self::getTable())->offset($offSet)->take(4)->get();

        return json_encode($limitedNews);

    }

}
