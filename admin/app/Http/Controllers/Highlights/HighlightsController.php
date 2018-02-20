<?php

namespace App\Http\Controllers\Highlights;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Highlights\Highlights;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

use \App\Http\Requests\AddHighlightsRequest;
use \App\Http\Requests\UpdateHighlightsRequest;
use Illuminate\Support\Facades\Input;


class HighlightsController extends Controller
{
    public function index()
    {
        return view('highlights.highlights', ['success' => '', 'bgColor' => '']);
    }

    public function addHighlight(AddHighlightsRequest $request)
    {

        //Inserting into table
        $picUpload = $request->file('pictureAdd');
        $imageName = $picUpload->getClientOriginalName();

        $imagePath = 'adminUploads/highlights/' . $imageName;

        $picUpload->move(base_path() . 'Uploads/highlights/', $imageName);

        $inserted = DB::table('highlights')->insert([
            'title' => $request->input('titleAdd'),
            'description' => $request->input('descriptionAdd'),
            'image_path' => $imagePath
        ]);

        if ($inserted) {
            return view('highlights.highlights', ['success' => 'Successfully Picture Inserted !!! :)', 'bgColor' => 'green']);
        } else {
            return view('highlights.highlights', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }

    }

    public function updateHighlight(UpdateHighlightsRequest $request)
    {

        $id = $request->input('id');

        $highlight = Highlights::find($id);

        //Getting Existing Values

        $title = $highlight->title;
        $description = $highlight->description;
        $picture = $highlight->image_path;

        //Checking what should be updated

        if (Input::get('title_check') == null) {
            $title = $request->input('titleUpdate');
        }
        if (Input::get('desc_check') == null) {
            $description = $request->input('descriptionUpdate');
        }
        if (Input::get('pic_check') == null) {
            //Deleting Picture In The Server
            unlink(base_path() . str_replace('admin', '', $highlight->image_path));

            $picture = 'adminUploads/highlights/' . $request->file('pictureUpdate')->getClientOriginalName();

            $request->file('pictureUpdate')->move(base_path() . 'Uploads/highlights/', $request->file('pictureUpdate')->getClientOriginalName());
        }


        $updated = Highlights::where('id', $id)
            ->update([
                'title' => $title,
                'description' => $description,
                'image_path' => $picture
            ]);

        if ($updated) {
            return view('highlights.highlights', ['success' => 'Successfully Highlight Updated !!! :)', 'bgColor' => 'green']);
        } else {
            return view('highlights.highlights', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }


    }

    public function getRestColumn(Request $r)
    {

        $id = $r->input('id');

        $highlight = Highlights::find($id);

        $title = $highlight->title;
        $description = $highlight->description;

        return $title . '%' . $description;

    }

    public function deleteBulk(Request $r)
    {

        $x = 0;

        $y = [];

        foreach (Highlights::deleteBulk($r) as $returned) {
            $y[$x++] = $returned;
        }

        $unDeleted = $y[0];

        $deleted = $y[1];


        if (!($this->haveAny($deleted) || $this->haveAny($unDeleted))) {
            return view('highlights.highlights', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        } else if ($this->haveAny($unDeleted)) {
            return view('highlights.highlights', ['success' => 'Some Of Highlights Couldn\'t deleted', 'bgColor' => 'red']);
        } else {
            return view('highlights.highlights', ['success' => 'Successfully All Checked Highlights Deleted', 'bgColor' => 'green']);
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

    public function bannerPager(Request $r)
    {
        $limitedBanner = new Highlights();

        echo $limitedBanner->bannerPager($r);
    }
}
