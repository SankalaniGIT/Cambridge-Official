<?php

namespace App\Highlights;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Highlights extends Model
{
    protected $table = 'highlights';

    protected $guarded = [];

    public static function deleteBulk(Request $r)
    {
        $banners = self::all();

        $deletable = [];

        //  To store deleted galleries
        $deleted = [];

        //  To store unDeletable galleries
        $unDeleted = [];


        $i = 0;

        foreach ($banners as $banner) {

            if ($r->input('bannerId' . $banner->id)) {
                $deletable[$i++] = $banner->id;
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

    public function bannerPager(Request $r)
    {

        $offSet = $r->input('limit') * 4;

        $limitedBanner = DB::table(self::getTable())->offset($offSet)->take(4)->get();

        return json_encode($limitedBanner);

    }
}
