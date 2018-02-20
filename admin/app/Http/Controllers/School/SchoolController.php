<?php

namespace App\Http\Controllers\School;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\AnthemRequest;
use App\Http\Requests\HousesRequest;
use App\Http\Requests\CrestRequest;
use App\Http\Requests\Background;

use App\School\Profile;
use App\School\Crest;
use App\School\Houses;
use App\School\Anthem;
use App\School\Background as BgModel;

class SchoolController extends Controller
{
    public function index()
    {
        return view('school.school', ['success' => '', 'bgColor' => '']);
    }

    public function profile(ProfileRequest $request)
    {
        $path = [];

        $title = $request->input('title');
        $subtitle = $request->input('subtitle');
        $information = $request->input('information');

        for ($i = 0; $i < 6; $i++) {
            $image = $request->file('picture' . ($i + 1))->getClientOriginalName();

            $path [$i] = 'adminUploads/school/profile/' . $image;

            $request->file('picture' . ($i + 1))->move(base_path() . 'Uploads/school/profile/', $image);
        }

        $status = false;

        if (Profile::find(1)) {
            for ($i = 1; $i < 6; $i++) {
                if (file_exists(base_path() . str_replace('admin', '', Profile::find(1)->picture . $i))) {
                    unlink(base_path() . str_replace('admin', '', Profile::find(1)->picture . $i));
                }
            }

            $status = Profile::where('id', 1)
                ->update(
                    [
                        'title' => $title,
                        'subtitle' => $subtitle,
                        'information' => $information,
                        'picture1' => $path[0],
                        'picture2' => $path[1],
                        'picture3' => $path[2],
                        'picture4' => $path[3],
                        'picture5' => $path[4],
                        'picture6' => $path[5]
                    ]
                );

        } else {
            $status = Profile::create(
                [
                    'title' => $title,
                    'subtitle' => $subtitle,
                    'information' => $information,
                    'picture1' => $path[0],
                    'picture2' => $path[1],
                    'picture3' => $path[2],
                    'picture4' => $path[3],
                    'picture5' => $path[4],
                    'picture6' => $path[5]
                ]
            );
        }
        if ($status) {
            return view('school.school', ['success' => 'Successfully Profile Updated !!! :)', 'bgColor' => 'green']);
        } else {
            return view('school.school', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }
    }


    public function anthem(AnthemRequest $request)
    {

        $title = $request->input('title');
        $information = $request->input('information');

        $audio = $request->file('audio')->getClientOriginalName();

        $path = 'adminUploads/school/anthem/' . $audio;

        $request->file('audio')->move(base_path() . 'Uploads/school/anthem/', $audio);


        $status = false;

        if (Anthem::find(1)) {
            if (file_exists(base_path() . str_replace('admin', '', Anthem::find(1)->audio))) {
                unlink(base_path() . str_replace('admin', '', Anthem::find(1)->audio));
            }

            $status = Anthem::where('id', 1)
                ->update(
                    [
                        'title' => $title,
                        'audio' => $path,
                        'text' => $information
                    ]
                );

        } else {
            $status = Anthem::create(
                [
                    'title' => $title,
                    'audio' => $path,
                    'text' => $information
                ]
            );
        }
        if ($status) {
            return view('school.school', ['success' => 'Successfully Anthem Updated !!! :)', 'bgColor' => 'green']);
        } else {
            return view('school.school', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }
    }

    public function houses(HousesRequest $request)
    {
        $title = $request->input('title');
        $information = $request->input('information');

        $picture = $request->file('picture')->getClientOriginalName();

        $path = 'adminUploads/school/houses/' . $picture;

        $request->file('picture')->move(base_path() . 'Uploads/school/houses/', $picture);


        $status = false;

        if (Houses::find(1)) {
            if (file_exists(base_path() . str_replace('admin', '', Houses::find(1)->picture))) {
                unlink(base_path() . str_replace('admin', '', Houses::find(1)->picture));
            }
            $status = Houses::where('id', 1)
                ->update(
                    [
                        'title' => $title,
                        'picture' => $path,
                        'information' => $information
                    ]
                );

        } else {
            $status = Houses::create(
                [
                    'title' => $title,
                    'picture' => $path,
                    'information' => $information
                ]
            );
        }
        if ($status) {
            return view('school.school', ['success' => 'Successfully Houses Updated !!! :)', 'bgColor' => 'green']);
        } else {
            return view('school.school', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }
    }

    public function crest(CrestRequest $request)
    {
        $title = $request->input('title');
        $information = $request->input('information');

        $picture = $request->file('picture')->getClientOriginalName();

        $path = 'adminUploads/school/crest/' . $picture;

        $request->file('picture')->move(base_path() . 'Uploads/school/crest/', $picture);


        $status = false;

        if (Crest::find(1)) {
            if (file_exists(base_path() . str_replace('admin', '', Crest::find(1)->picture))) {
                unlink(base_path() . str_replace('admin', '', Crest::find(1)->picture));
            }
            $status = Crest::where('id', 1)
                ->update(
                    [
                        'title' => $title,
                        'picture' => $path,
                        'information' => $information
                    ]
                );

        } else {
            $status = Crest::create(
                [
                    'title' => $title,
                    'picture' => $path,
                    'information' => $information
                ]
            );
        }
        if ($status) {
            return view('school.school', ['success' => 'Successfully Crest Updated !!! :)', 'bgColor' => 'green']);
        } else {
            return view('school.school', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }
    }


    public function setBackground(Background $request)
    {
        $picture = $request->file('background')->getClientOriginalName();

        $path = 'adminUploads/background/' . $picture;

        $request->file('background')->move(base_path() . 'Uploads/background/', $picture);


        $status = false;

        if (BgModel::find(1)) {
            if (file_exists(base_path() . str_replace('admin', '', BgModel::find(1)->picture))) {
                unlink(base_path() . str_replace('admin', '', BgModel::find(1)->picture));
            }

            $status = BgModel::where('id', 1)
                ->update(
                    [
                        'picture' => $path
                    ]
                );

        } else {
            $status = BgModel::create(
                [
                    'picture' => $path
                ]
            );
        }
        if ($status) {
            return view('school.school', ['success' => 'Successfully Background Updated !!! :)', 'bgColor' => 'green']);
        } else {
            return view('school.school', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }
    }
}
