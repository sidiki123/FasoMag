<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('awesomemagazine/index');
});


Route::get('/category/politique', function () {
    return view('awesomemagazine/category');
});

Route::get('/contact', function () {
    return view('awesomemagazine/contact');
});

Route::get('/category/elements', function () {
    return view('awesomemagazine/elements');
});

Route::get('/login', function () {
    return view('awesomemagazine/login');
});

Route::get('/sin-up', function () {
    return view('awesomemagazine/sin-up');
});

Route::get('/category/post_details', function () {
    return view('awesomemagazine/post_details');
});

Route::get('/blog', function () {
    return view('awesomemagazine/blog');
});

Route::get('/blog_details', function () {
    return view('awesomemagazine/blog_details');
});

Route::get('/about', function () {
    return view('awesomemagazine/about');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::resource('awesomemagazine/index', 'ActualitiesController');

Route::get('/','ActualitiesController@index');
// Route::resource('/sin-up','NewsController');
Route::get('/sin-up', 'NewsController@index');
Route::post('/sin-up', 'NewsController@store')->name('store');
Route::get('/category/politique', 'PolitiqueController@index');
Route::get('/category/economie', 'EconomieController@index');
Route::get('/category/societe', 'SocieteController@index');
Route::get('/category/cooperation', 'CooperationController@index');
Route::get('/category/culture', 'CultureController@index');

Route::get('awesomemagazine/post_details', 'detailsController@index');
Route::post('awesomemagazine/post_details', 'detailsController@edit');

Route::get('/', 'ActualitiesController@displayNews');
// Route::post('/sourceId', 'ApiController@displayNews');
