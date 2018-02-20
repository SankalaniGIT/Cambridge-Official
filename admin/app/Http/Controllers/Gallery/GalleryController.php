<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\AddGroupRequest;
use App\Http\Requests\AddGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Controllers\Controller as BaseController;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use App\Gallery\Category;

use App\Gallery\Gallery;

use App\Gallery\Group;
use Mockery\Recorder;

class GalleryController extends BaseController
{
    //
    public function index()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            return view('gallery.gallery', ['success' => '', 'bgColor' => '']);
        }
    }

    public function addGallery(AddGalleryRequest $request)
    {
        $categoryId = $request->input('category');

        $category = Category::find($categoryId)->category;

        $alt = $request->input('alt');
        $desc = $request->input('description');

        $imageName = $request->file('picture')->getClientOriginalName();


        $imagePath = 'adminUploads/gallery/' . $category . "/" . $imageName;


        $request->file('picture')->move(base_path() . 'Uploads/gallery/' . $category . "/", $imageName);

        $uploaded = Gallery::create(['category' => $category, 'image_path' => $imagePath, 'description' => $desc, 'alt' => $alt]);

        if ($uploaded) {
            return view('gallery.gallery', ['success' => 'Successfully Gallery Updated !!! :)', 'bgColor' => 'green']);
        } else {
            return view('gallery.gallery', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }


    }

    public function updateGallery(UpdateGalleryRequest $request)
    {

        $id = $request->input('id');

        $gallery = Gallery::find($id);

        //assigning older data variables

        $category = $gallery->category;
        $image_path = $gallery->image_path;
        $desc = $gallery->description;
        $alt = $gallery->alt;

        if ($request->input('cat_check') == null) {
            $catId = $request->input('category');
            $category = Category::find($catId)->category;

        }
        if ($request->input('desc_check') == null) {
            $desc = $request->input('description');
        }
        if ($request->input('alt_check') == null) {
            $alt = $request->input('alt');
        }

        if ($request->input('pic_check') != null) {
        } else {
            if(file_exists(base_path() . str_replace('admin', '', $gallery->image_path))){
            unlink(base_path() . str_replace('admin', '', $gallery->image_path));
        }
            $imageName = $request->file('picture')->getClientOriginalName();
            //to be saved in database
            $image_path = 'adminUploads/gallery/' . $category . '/' . $imageName;


            $request->file('picture')->move(base_path() . 'Uploads/gallery/' . $category . '/', $imageName);
        }


        $updated = Gallery::where('id', $id)->update(['description' => $desc, 'alt' => $alt, 'image_path' => $image_path, 'category' => $category]);

        if ($updated) {
            return view('gallery.gallery', ['success' => 'successfully updated :)', 'bgColor' => 'green']);
        } else {
            return view('gallery.gallery', ['success' => 'Error updating  :(', 'bgColor' => 'red']);
        }


    }

    public function deleteGallery($id)
    {
        $deleteGallery = Gallery::find($id);

        $imagePath = $deleteGallery->image_path;

        if (count($deleteGallery) > 0) {

            if ($deleteGallery->delete()) {
                if(file_exists(base_path() . str_replace('admin', '', $imagePath))){
                     unlink(base_path() . str_replace('admin', '', $imagePath));
                }
               
                return view('gallery.gallery', ['success' => 'Successfully gallery picture Deleted', 'bgColor' => 'green']);
            } else {
                return view('gallery.gallery', ['success' => 'Error Occured :( While Deleting', 'bgColor' => 'red']);
            }
        } else {
            return view('gallery.gallery', ['success' => 'Image\'s been already deleted :( !!!', 'bgColor' => 'red']);
        }
    }

    public function addCategory(AddCategoryRequest $request)
    {

        $group = ($request->input('group') != '') ? $request->input('group') : 0;

        $category = $request->input('category');

        try {
            Category::create(['category' => strtoupper($category), 'group_id' => $group]);
            return view('gallery.gallery', ['success' => 'Succesfully Added Category', 'bgColor' => 'green']);
        } catch (QueryException $e) {
            return view('gallery.gallery', ['success' => 'Error Occured :( Adding Category (Already Added)', 'bgColor' => 'red']);
        }
    }

    public function addGroup(AddGroupRequest $request)
    {
        $group = $request->input('group');

        try {
            Group::create(['groupName' => strtoupper($group)]);
            return view('gallery.gallery', ['success' => 'Successfully Added Group', 'bgColor' => 'green']);
        } catch (QueryException $e) {
            return view('gallery.gallery', ['success' => 'Error Occurred :( Adding Group (Already Added)', 'bgColor' => 'red']);
        }


    }

    public function deleteCategory(Request $request)
    {

        $categoryId = $request->input('categoryToDelete');

        $category = Category::find($categoryId)->category;

        $galleries = Gallery::where('category', $category)->get();

        foreach ($galleries as $g) {
            $id = $g->id;

            Gallery::find($id)->delete();
        }

        if (Category::find($categoryId)->delete()) {
            return view('gallery.gallery', ['success' => 'Successfully Category Deleted', 'bgColor' => 'green']);
        } else {
            return view('gallery.gallery', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }

    }


    public function deleteGroup(Request $request)
    {

        $groupId = $request->input('groupToDelete');

        $categories = Category::where('group_id', $groupId)->get();

        foreach ($categories as $c) {
            $id = $c->id;

            $this->deleteRelatedGallery($c->category);

            Category::find($id)->delete();
        }

        if (Group::find($groupId)->delete()) {
            return view('gallery.gallery', ['success' => 'Successfully Group Deleted', 'bgColor' => 'green']);
        } else {
            return view('gallery.gallery', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }


    }

    public function deleteRelatedGallery($category)
    {
        $galleries = Gallery::where('category', $category)->get();

        foreach ($galleries as $g) {
            $id = $g->id;

            Gallery::find($id)->delete();
        }
    }

    public function renameGroup(Request $r)
    {
        $groupId = $r->input('groupToRename');
        $newGroupName = $r->input('newGroupName');


        $group = Group::find($groupId);

        $group->groupName = strtoupper($newGroupName);

        if ($group->save()) {
            return view('gallery.gallery', ['success' => 'Successfully Group Renamed', 'bgColor' => 'green']);
        } else {
            return view('gallery.gallery', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }

    }


    public function renameCategory(Request $r)
    {
        $categoryId = $r->input('categoryToRename');

        $oldCategoryName = Category::find($categoryId)->category;

        $newCategoryName = $r->input('newCategoryName');

        $galleries = Gallery::where('category', $oldCategoryName)->get();

        foreach ($galleries as $g) {
            $g->category = strtoupper($newCategoryName);
            $g->save();
        }

        $category = Category::find($categoryId);

        $category->category = strtoupper($newCategoryName);

        if ($category->save()) {
            return view('gallery.gallery', ['success' => 'Successfully Category Renamed', 'bgColor' => 'green']);
        } else {
            return view('gallery.gallery', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }
    }


    public function deleteBulk(Request $r)
    {

        $x = 0;

        $y = [];

        foreach (Gallery::deleteBulk($r) as $returned) {
            $y[$x++] = $returned;
        }

        $unDeleted = $y[0];

        $deleted = $y[1];


        if (!($this->haveAny($deleted) || $this->haveAny($unDeleted))) {
            return view('gallery.gallery', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        } else if ($this->haveAny($unDeleted)) {
            return view('gallery.gallery', ['success' => 'Some Of Galleries Couldn\'t deleted', 'bgColor' => 'red']);
        } else {
            return view('gallery.gallery', ['success' => 'Successfully All Checked Galleries Deleted', 'bgColor' => 'green']);
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


    public function galleryPager(Request $r){


        $limitedGallery = new Gallery();

        echo $limitedGallery->galleryPager($r);
    }
}
