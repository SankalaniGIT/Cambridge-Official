<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/account', 'HomeController@index')->name('account');
Route::get('/news', 'News\NewsController@index');

Route::get('/gallery', 'Gallery\GalleryController@index');


Route::get('/contact', 'Contact\ContactController@index');

Route::get('/messages', function () {
    return view('messages.messages', ['requestedView' => false, 'success' => '', 'bgColor' => '']);
});

//
Route::post('/submitContact', 'Contact\ContactController@updateContactDetails');


Route::post('/addNews', 'News\NewsController@addNews');

//update News
Route::post('/updateNews', 'News\NewsController@updateNews');

//delete News
Route::get('/news/delete/{id}', 'News\NewsController@deleteNews');

Route::delete('/news', 'News\NewsController@deleteBulk');

Route::post('/news/addCategory', 'News\NewsController@addCategory');

Route::post('news/renameCategory', 'News\NewsController@renameCategory');

Route::post('/news/deleteCategory', 'News\NewsController@deleteCategory');


//gallery

Route::post('/addGallery', 'Gallery\GalleryController@addGallery');

Route::post('/updateGallery', 'Gallery\GalleryController@updateGallery');

Route::get('/gallery/delete/{id}', 'Gallery\GalleryController@deleteGallery');

Route::post('/gallery/addCategory', 'Gallery\GalleryController@addCategory');

Route::post('/gallery/deleteCategory', 'Gallery\GalleryController@deleteCategory');

Route::post('/gallery/deleteGroup', 'Gallery\GalleryController@deleteGroup');

Route::delete('/gallery', 'Gallery\GalleryController@deleteBulk');


Route::post('gallery/renameGroup', 'Gallery\GalleryController@renameGroup');

Route::post('gallery/renameCategory', 'Gallery\GalleryController@renameCategory');


Route::post('/gallery/addGroup', 'Gallery\GalleryController@addGroup');


//register

Route::get('addUserAdmin', 'Auth\addAdminController@index')->name('addUserAdmin');

Route::post('addUserAdmin', 'Auth\addAdminController@add');


//messages

Route::get('viewMessage/{id}', 'Messages\MessagesController@viewMessage')->name('viewMessage');

Route::get('deleteMessage/{id}', 'Messages\MessagesController@deleteMessage')->name('deleteMessage');


//highlights
Route::get('highlights', 'Highlights\HighlightsController@index');
Route::match(['get', 'post'], 'addHighlight', 'Highlights\HighlightsController@addHighlight')->name('addHighlight');

Route::match(['get', 'post'], 'updateHighlight', 'Highlights\HighlightsController@updateHighlight')->name('updateHighlight');

Route::get('/highlightAjax', 'Highlights\HighlightsController@getRestColumn');

Route::get('highlights/delete/{id}', function ($id) {
    $lights = App\Highlights\Highlights::find($id);
    if (App\Highlights\Highlights::where('id', $id)->count() > 0) {
        if (App\Highlights\Highlights::destroy([$id])) {
            //Deleting Picture In The Server
            unlink(base_path() . str_replace('admin', '', $lights->image_path));
            return view('highlights.highlights', ['success' => 'Successfully Highlight Deleted !!! :)', 'bgColor' => 'green']);
        } else {
            return view('highlights.highlights', ['success' => 'Sorry :( Error Occured !!!', 'bgColor' => 'red']);
        }
    } else {
        return view('highlights.highlights', ['success' => 'Sorry :( This may be already deleted', 'bgColor' => 'red']);
    }

});

Route::delete('/banner', 'Highlights\HighlightsController@deleteBulk');


Route::get('career', 'Career\CareerController@index');

Route::post('career', 'Career\CareerController@store');

Route::patch('career', 'Career\CareerController@update');

Route::get('career/delete/{id}', 'Career\CareerController@destroy');


Route::get('ajax/career/getInfo', 'Career\CareerController@getInfo');

Route::delete('/career', 'Career\CareerController@deleteBulk');


//AJAX => GALLERY
Route::get('ajax/gallery/page', 'Gallery\GalleryController@galleryPager');

//AJAX => News
Route::get('ajax/news/page', 'News\NewsController@newsPager');

//AJAX => Banner
Route::get('ajax/banner/page', 'Highlights\HighlightsController@bannerPager');

//AJAX => Career
Route::get('ajax/career/page', 'Career\CareerController@careerPager');


//school profile
Route::get('/school', 'School\SchoolController@index');
Route::post('background', 'School\SchoolController@setBackground')->name('background');
Route::post('profile', 'School\SchoolController@profile')->name('profile');
Route::post('anthem', 'School\SchoolController@anthem')->name('anthem');
Route::post('houses', 'School\SchoolController@houses')->name('houses');
Route::post('crest', 'School\SchoolController@crest')->name('crest');




//Comment
Route::get('/comments', 'News\CommentsController@index');
Route::get('ajax/comments/view', 'News\CommentsController@loadComments');
Route::get('ajax/comments/delete', 'News\CommentsController@deleteComment');
