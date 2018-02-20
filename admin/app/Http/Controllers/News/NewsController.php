<?php

namespace App\Http\Controllers\News;

use App\Http\Requests\NewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\News\News;
use App\News\Category;
use App\Http\Requests\AddNewsCategoryRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    //
    public function index()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            return view('news.news', ['success' => '', 'bgColor' => '']);
        }
    }

    public function addNews(NewsRequest $request)
    {


        $title = $request->input('title');
        $categoryId = $request->input('category');
        $subtitle = $request->input('subtitle');
        $content = $request->input('content');
        $names_concerned = $request->input('names_concerned');


        $imageName = $request->file('picture')->getClientOriginalName();

        $imagePath = 'adminUploads/news/' . $imageName;


        $request->file('picture')->move(base_path() . 'Uploads/news/', $imageName);

        //Year,Month Archive
        $archive = date('Y/M', time());

        $added = News::create(['title' => $title, 'subtitle' => $subtitle, 'content' => $content, 'names_concerned' => $names_concerned, 'image_path' => $imagePath, 'posted_on' => time(), 'archive' => $archive, 'category_id' => $categoryId]);

        if ($added) {
            return view('news.news', ['success' => 'Successfully Added:)', 'bgColor' => 'green']);
        } else {
            return view('news.news', ['success' => 'Error :(', 'bgColor' => 'red ']);
        }
    }


    public function deleteNews($id)
    {
        $deleteNews = News::find($id);

        if (count($deleteNews) > 0) {

            if ($deleteNews->delete()) {
                unlink(base_path() . str_replace('admin', '', $deleteNews->image_path));
                return view('news.news', ['success' => 'Succesfully Deleted', 'bgColor' => 'green']);
            } else {
                return view('news.news', ['success' => 'Error Occured :( While Deleting', 'bgColor' => 'red']);
            }
        } else {
            return view('news.news', ['success' => 'News\'s been already deleted :( !!!', 'bgColor' => 'red']);
        }
    }

    public function updateNews(UpdateNewsRequest $r)
    {

        $id = $r->input('id');

        $news = News::find($id);

        //assigning older data variables

        $title = $news->title;
        $subtitle = $news->subtitle;
        $content = $news->content;
        $names_concerned = $news->names_concerned;
        $image_path = $news->image_path;
        $archive = $news->archive;

        $categoryId = $news->category_id;

        if ($r->input('t_check') == null) {
            $title = $r->input('title');
        }

        if ($r->input('cat_check') == null) {

            $categoryId = $r->input('category');

        }

        if ($r->input('st_check') == null) {
            $subtitle = $r->input('subtitle');
        }
        if ($r->input('c_check') == null) {
            $content = $r->input('content');
        }
        if ($r->input('nc_check') == null) {
            $names_concerned = $r->input('names_concerned');
        }
        if ($r->input('p_check') != null) {
        } else {


            if (file_exists(base_path() . str_replace('admin', '', $news->image_path))) {
                unlink(base_path() . str_replace('admin', '', $news->image_path));
            }


            $imageName = $r->file('picture')->getClientOriginalName();
            //to be saved in database
            $image_path = 'adminUploads/news/' . $imageName;


            $r->file('picture')->move(base_path() . 'Uploads/news/', $imageName);
        }


        $updated = News::where('id', $id)->update(['title' => $title, 'subtitle' => $subtitle, 'content' => $content, 'names_concerned' => $names_concerned, 'image_path' => $image_path, 'posted_on' => time(), 'archive' => $archive, 'category_id' => $categoryId]);

        if ($updated) {
            return view('news.news', ['success' => 'successfully updated :)', 'bgColor' => 'green']);
        } else {
            return view('news.news', ['success' => 'Error updating  :(', 'bgColor' => 'red']);
        }


    }


    public function deleteBulk(Request $request)
    {

        $x = 0;

        $y = [];

        foreach (News::deleteBulk($request) as $returned) {
            $y[$x++] = $returned;
        }

        $unDeleted = $y[0];

        $deleted = $y[1];


        if (!($this->haveAny($deleted) || $this->haveAny($unDeleted))) {
            return view('news.news', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        } else if ($this->haveAny($unDeleted)) {
            return view('news.news', ['success' => 'Some Of News Couldn\'t deleted', 'bgColor' => 'red']);
        } else {
            return view('news.news', ['success' => 'Successfully All Checked News Deleted', 'bgColor' => 'green']);
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


    public function newsPager(Request $r)
    {


        $limitedNews = new News();

        echo $limitedNews->newsPager($r);
    }


    public function addCategory(AddNewsCategoryRequest $request)
    {

        $category = $request->input('category');

        try {
            Category::create(['category' => strtoupper($category)]);
            return view('news.news', ['success' => 'Successfully Added Category', 'bgColor' => 'green']);
        } catch (QueryException $e) {
            return view('news.news', ['success' => 'Error Occured :( Adding Category (Already Added)', 'bgColor' => 'red']);
        }
    }

    public function renameCategory(Request $r)
    {
        $categoryId = $r->input('categoryToRename');

        if (Category::where('id', $categoryId)->update(['category' => strtoupper($r->input('newCategoryName'))])) {
            return view('news.news', ['success' => 'Successfully Category Renamed', 'bgColor' => 'green']);
        } else {
            return view('news.news', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }
    }


    public function deleteCategory(Request $request)
    {

        $categoryId = $request->input('categoryToDelete');

        $news = News::where('category_id', $categoryId)->get();

        foreach ($news as $n) {
            $id = $n->id;

            News::find($id)->delete();
        }

        if (Category::find($categoryId)->delete()) {
            return view('news.news', ['success' => 'Successfully Category Deleted', 'bgColor' => 'green']);
        } else {
            return view('news.news', ['success' => 'Error Occurred :(', 'bgColor' => 'red']);
        }

    }


}
