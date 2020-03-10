<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\BlogController;

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

// Route::get('/', function () {
    // return view('welcome');
// });

Auth::routes();

// Route::controllers([
        // 'password' => 'Auth\ForgetPasswordController',
        // 'reset' => 'Auth\ResetPasswordController',
// ]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/blogs-post-view', 'HomeController@blogs')->name('blogs');
Route::get('/single-blog-post-view/{uuid}', 'HomeController@singleBlog')->name('single-blog');
Route::get('/gallery-for-all-pictures-and-images', 'HomeController@gallery')->name('gallery');
Route::get('/about-us-and-users-testimony', 'HomeController@aboutUsAndTestimony')->name('about-us');
Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');

Route::post('/sendContact', 'HomeController@send_contact');

    //School controller
// Route::get('/school', 'SchoolController@index')->name('school');sendContact
Route::get('/school/blog', 'SchoolController@blog')->name('blog');
Route::get('/school/blog-details/{uuid}', 'SchoolController@blog_details')->name('blog-details');
// Route::get('/school/blog-details/{uuid}', 'SchoolController@single_blog')->name('single_blog');
Route::get('/school/comments/blog-details/{uuid}', 'SchoolController@all_comments')->name('blog-details');
Route::get('/school/comments/blog-details/delete/{uuid}', 'SchoolController@destroy')->name('blog-details');
Route::get('/school/photo-albums', 'SchoolController@photo_albums')->name('photo-albums');
Route::get('/school/photo-albums', 'SchoolController@photo_details')->name('photo_details');
// Route::get('/school/photo-albums', 'SchoolController@photo_name')->name('photo_name');
// Route::get('/', 'SchoolController@photos')->name('photos');

// Route::get('/', 'SchoolController@contact');
// Route::get('/sendContact', 'SchoolController@contact');
// Route::post('/sendContact', 'SchoolController@send_contact');

        //COMMENTS
Route::get('/postingComments', 'CommentController@comment');
Route::post('/postingComments', 'CommentController@store');
Route::get('/school/comments/blog-details/delete/{uuid}', 'CommentController@destroy')->name('blog-details');


                //CONTACT
// Route::get('/', 'ContactController@index');



            //About-US
Route::get('/dashboard/school/school_admin/about/index', 'AboutController@index');
Route::post('/dashboard/school/school_admin/about/index', 'AboutController@store');
Route::get('/dashboard/school/school_admin/about/index', 'AboutController@show');
Route::get('/dashboard/school/school_admin/about/index/uuid', 'AboutController@edit');
Route::get('/dashboard/school/school_admin/about/index/uuid', 'AboutController@update');

        //Create Albums for Classes
Route::resource('/dashboard/school/school_admin/class_albums/index', 'AlbumController');
Route::get('/dashboard/school/school_admin/class_albums/index', 'AlbumController@index')->name('index');
Route::post('/school/school_admin/class_albums/store', 'AlbumController@store');
Route::get('/school/school_admin/class_albums/show', 'AlbumController@show');
Route::get('/dasboard/school/school_admin/class_albums/edit/{uuid}', 'AlbumController@edit');
Route::post('/school/school_admin/class_albums/edit/{uuid}', 'AlbumController@update');


    //Dashboard controller
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/school/profiles/details', 'DashboardController@details');
Route::post('/dashboard/school/profiles/store', 'DashboardController@store');
Route::get('/dashboard/school/profiles/edit/{uuid}', 'DashboardController@edit');
Route::post('/dashboard/school/profiles/edit/{uuid}', 'DashboardController@update');


        //Blog post for Student
Route::get('/dashboard/school/students/blogs/blog', 'BlogController@index')->name('blog');
Route::get('/school/students/blogs/show', 'BlogController@show');
Route::post('/school/students/blogs/store', 'BlogController@store');
Route::get('/dashboard/school/students/blogs/show', 'BlogController@show');
Route::get('/dashboard/school/students/blogs/edit/{uuid}', 'BlogController@edit');
Route::post('/school/students/blogs/edit/{uuid}', 'BlogController@update');
Route::get('/school/students/blogs/delete/{uuid}', 'BlogController@destroy');


        //Photo albums
// Route::get('/school/photo-albums', 'PhotoalbumsController@index')->name('photo-albums');

        //Testimony Controller
Route::get('/dashboard/school/students/testimony/index', 'TestimonyController@index');
Route::get('/school/students/testimony/show', 'TestimonyController@show');
Route::post('/school/students/testimony/store', 'TestimonyController@store');
Route::get('/dashboard/school/students/testimony/edit/{uuid}', 'TestimonyController@edit');
Route::post('/school/students/testimony/edit/{uuid}', 'TestimonyController@update');
Route::get('/school/students/testimony/delete/{uuid}', 'TestimonyController@destroy');

        //ALL COMMENTS
// Route::get('/school/blog-details', 'CommentController@index')->name('blog-details');
// Route::get('/school/comments/blog-details', 'CommentController@all_comments')->name('blog-details');
Route::post('/school/comments/store', 'CommentController@store');
Route::post('/school/comments/save', 'CommentController@save');
// Route::get('/school/blog-details/show', 'CommentController@show');
Route::get('/school/comments/show', 'CommentController@show');
Route::get('/school/comments/show', 'CommentController@commentAll');
Route::get('/school/comments/delete/{uuid}', 'CommentController@destroy');

                //Photo Albums Multi Uploading
Route::get('/dashboard/school/students/photo_album/upload_form', 'UploadController@uploadForm');
// Route::get('/dashboard/school/students/photo_album/upload_form', 'UploadController@uploadForm2');
Route::get('/multiuploads', 'UploadController@uploadForm');
// Route::get('/multiuploads', 'UploadController@uploadForm2');
Route::post('/multiuploads', 'UploadController@uploadSubmit');
Route::get('/school/students/photo_album/show', 'UploadController@show');
Route::get('/school/students/photo_album/delete/{id}', 'UploadController@destroy');

                //GALLERIES
Route::get('/dashboard/school/students/photo_album/create', 'GalleryController@create');
Route::post('/gallery', 'GalleryController@store');
