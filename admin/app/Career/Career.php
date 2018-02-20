<?php

namespace App\Career;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Career extends Model
{
    protected $table = 'career';
    protected $guarded = [];

    public $timestamps = false;


    public static function store($position, $description, $noOfVacant, $expiresIn, $qualification, $priority, $banner)
    {
        date_default_timezone_set('Asia/Colombo');

        $created = [
            'position' => $position,
            'description' => $description,
            'noOfVacants' => $noOfVacant,
            'banner' => $banner,
            'datePosted' => time(),
            'postDuration' => $expiresIn,
            'qualification' => $qualification,
            'priority' => $priority
        ];

        if (self::create($created)) {
            return true;
        } else {
            return false;
        }

    }

    public static function updateCareer(Request $r)
    {

        $currentCareer = self::find($r->input('position'));

        $description = $currentCareer->description;
        $noOfVacant = $currentCareer->noOfVacants;
        $expiresIn = $currentCareer->postDuration;
        $qualification = $currentCareer->qualification;
        $priority = $currentCareer->priority;
        $bannerPath = $currentCareer->banner;


        if ($r->input('noVacant_check') == null) {
            $noOfVacant = $r->input('noOfVacantUpdate');
        }

        if ($r->input('desc_check') == null) {
            $description = $r->input('description');
        }

        if ($r->input('exp_check') == null) {
            $expiresIn = $r->input('expiresIn');
        }
        if ($r->input('qual_check') == null) {

            $fieldCount = $r->input('totalQualificationUpdate');

            $qualification = '';
            for ($i = 0; $i < $fieldCount; $i++) {
                $qualification .= '<li>' . $r->input('qualificationUpdate' . $i) . '</li>';
            }

        }
        if ($r->input('priority_check') == null) {
            $priority = $r->input('priority');
        }

        if ($r->input('banner_check') == null) {

            $banner = $r->file('banner')->getClientOriginalName();

            $bannerPath = 'adminUploads/career/' . $banner;

            if (file_exists(base_path() . str_replace('admin', '', $currentCareer->banner))) {
                unlink(base_path() . str_replace('admin', '', $currentCareer->banner));
            }


            $r->file('banner')->move(base_path() . 'Uploads/career/', $banner);


        }

        if (self::where('id', $r->input('position'))->update([
            'description' => $description,
            'noOfVacants' => $noOfVacant,
            'banner' => $bannerPath,
            'postDuration' => $expiresIn,
            'qualification' => $qualification,
            'priority' => $priority
        ])
        ) {
            return true;
        } else {
            return false;
        }


    }

    public static function deleteBulk(Request $r)
    {
        $careers = self::all();

        $deletable = [];

        //  To store deleted galleries
        $deleted = [];

        //  To store unDeletable galleries
        $unDeleted = [];


        $i = 0;

        foreach ($careers as $career) {

            if ($r->input('careerId' . $career->id)) {
                $deletable[$i++] = $career->id;
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

    public function careerPager(Request $r)
    {

        $offSet = $r->input('limit') * 4;

        $limitedCareer = DB::table(self::getTable())->offset($offSet)->take(4)->get();

        return json_encode($limitedCareer);

    }
}
