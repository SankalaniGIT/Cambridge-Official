<?php

namespace App\Gallery;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Gallery extends Model
{
    //
    protected $table = 'gallery';

    public $timestamps = false;

    protected $guarded = [];


    public static function deleteBulk(Request $r)
    {
        $galleries = self::all();

        $deletable = [];

        //  To store deleted galleries
        $deleted = [];

        //  To store unDeletable galleries
        $unDeleted = [];


        $i = 0;

        foreach ($galleries as $gallery) {

            if ($r->input('galleryId' . $gallery->id)) {
                $deletable[$i++] = $gallery->id;
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


        return [$unDeleted, $deleted];
    }


    public function galleryPager(Request $r)
    {

        $offSet = $r->input('limit') * 4;

        $limitedGallery = DB::table(self::getTable())->offset($offSet)->take(4)->get();

        return json_encode($limitedGallery);

    }
}
