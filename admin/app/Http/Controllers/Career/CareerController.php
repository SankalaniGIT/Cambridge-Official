<?php

namespace App\Http\Controllers\Career;

use App\Career\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\AddCareerInfo;

class CareerController extends Controller
{


    public function index()
    {
        return view('career/career', ['success' => '', 'bgColor' => '']);
    }

    public function create()
    {//
    }

    public function store(AddCareerInfo $request)
    {

        $fieldCount = $request->input('totalQualification');

        $qualification = '';
        for ($i = 0; $i < $fieldCount; $i++) {
            $qualification .= '<li>' . $request->input('qualification' . $i) . '</li>';
        }

        $banner = $request->file('banner')->getClientOriginalName();

        $bannerPath = 'adminUploads/career/' . $banner;

        $request->file('banner')->move(base_path() . 'Uploads/career/', $banner);


        $status = Career::store($request->input('position'), $request->input('description'), $request->input('noOfVacant'), $request->input('duration'), $qualification, $request->input('priority'), $bannerPath);

        if ($status == true) {
            return view('career/career', ['success' => 'Successfully Submitted :)', 'bgColor' => 'green']);
        } else {
            return view('career/career', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }

    }

    public function update(Request $request)
    {
        if (Career::updateCareer($request) == true) {
            return view('career/career', ['success' => 'Successfully Updated :)', 'bgColor' => 'green']);
        } else {
            return view('career/career', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }
    }

    public function destroy($id)
    {
        if (Career::find($id)->delete()) {
            return view('career/career', ['success' => 'Successfully Deleted :)', 'bgColor' => 'green']);
        } else {
            return view('career/career', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }
    }

    public function getInfo(Request $r)
    {
        $currentCareer = Career::find($r->input('id'));

        $description = $currentCareer->description;
        $noOfVacant = $currentCareer->noOfVacants;
        $expiresIn = $currentCareer->postDuration;
        $qualification = $currentCareer->qualification;
        $priority = $currentCareer->priority;


        $contentForPosition = [$description, $noOfVacant, $expiresIn, $qualification, $priority];

        echo json_encode($contentForPosition);
    }


    public function deleteBulk(Request $r)
    {

        $x = 0;

        $y = [];

        foreach (Career::deleteBulk($r) as $returned) {
            $y[$x++] = $returned;
        }

        $unDeleted = $y[0];

        $deleted = $y[1];


        if (!($this->haveAny($deleted) || $this->haveAny($unDeleted))) {
            return view('career.career', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        } else if ($this->haveAny($unDeleted)) {
            return view('career.career', ['success' => 'Some Of Careers Couldn\'t deleted', 'bgColor' => 'red']);
        } else {
            return view('career.career', ['success' => 'Successfully All Checked Careers Deleted', 'bgColor' => 'green']);
        }

    }

    function haveAny($array)
    {
        if (count($array) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function careerPager(Request $r)
    {


        $limitedCareer = new Career();

        echo $limitedCareer->careerPager($r);
    }

}
