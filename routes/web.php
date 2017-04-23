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
    return view('home', ['page_title' => 'Home', 'registration_date' => date('m/d/Y')]);
});

Route::get('about', function () {
    return view('about', ['page_title' => 'About']);
});

Route::get('services', function () {
    return view('services', ['page_title' => 'Services']);
});

Route::get('contact', function () {
    return view('contact', ['page_title' => 'Contact Us']);
});

Route::get('coaching', function () {
    return view('interculturalcoaching', ['page_title' => 'Intercultural Coaching']);
});

Route::get('training', function () {
    return view('training', ['page_title' => 'Training']);
});

Route::get('development', function () {
    return view('programdevelopment', ['page_title' => 'Program Development']);
});

Route::get('thanks', function () {
    return view('thankyou', ['page_title' => 'Thank You']);
});

//Asset Routes
Route::group(['prefix' => 'asset'], function(){
	Route::get('new', function () {
	    return view('newasset', ['page_title' => 'Upload New Asset']);
	});
	Route::get('edit/{id}', function () {
	    return view('editasset', ['page_title' => 'Edit Asset']);
	});
	Route::post('new', 'AssetController@create');
	Route::put('edit', 'AssetController@update');
});

//Post Routes
Route::group(['prefix' => 'post'], function(){
	Route::get('new', function () {
	    return view('newpost', ['page_title' => 'New Post']);
	});
	Route::get('edit/{id}', function () {
	    return view('editpost', ['page_title' => 'Edit Post']);
	});
	Route::post('new', 'PostController@create');
	Route::put('edit', 'PostController@update');
	Route::get('{slug}', 'PostController@display');
});

Route::get('styles', function () {
    // return view('welcome');
    return view('styleguide', ['page_title' => 'Style Guide']);
});

// Auth::routes();

// Route::get('/home', 'HomeController@index');
