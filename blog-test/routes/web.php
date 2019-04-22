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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('page.about');  // link page that have file about.blade.php int folder views
});



Route::get('/edit/{id?}', function ($id=23) {
    return '<h3>ID: </h3>'.$id;
});

Route::get('/me/{age?}/{name?}', function ($age=22,$name='Hany SRNG') {
    return '<h3>Age: </h3>'.$age.'<h3>Name: </h3>'.$name;
});

Route::get('/user/{name?}',function($name='hany') {
    return "Name:".$name;
});



Route::get('/home','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/service','PagesController@service');
Route::get('/customer','PagesController@customer');
Route::get('/post','PostController@post');
Route::get('/create','PostController@create');
Route::post('/stort','PostController@stort');
Route::get('/showEdit/{id}','PostController@showEdit');
Route::patch('/update/{id}','PostController@update');
Route::delete('/delete/{id}','PostController@delete');

Route::resource('comment','commentController');
Auth::routes();



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sendEmail','HomeController@sendEmail');

Route::post('/showUpload','UploadController@showUploadFrom');
Route::post('/upload','UploadController@upload');

Route::get('/student','StudentController@student');

Route::get('/admin','AdminController@admin');
// Rout::get('/admin','HomeController');


