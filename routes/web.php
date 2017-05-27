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
    return view('home', 
                [
	                'page_title' => 'Home', 
	                'body_class' => 'homepage'
                ]);
});

Route::get('about', function () {
    return view('about', 
                [
                	'page_title' => 'About',
                	'body_class' => 'about'
                ]);
});

Route::get('services', function () {
    return view('services', 
                [
	            	'page_title' => 'Services',
	            	'body_class' => 'services'
	            ]);
});

Route::get('contact', function () {
    return view('contact',
                [
                	'page_title' => 'Contact Us',
                	'body_class' => 'contact'
                ]);
});

Route::get('coaching', function () {
    return view('interculturalcoaching',
                [
                	'page_title' => 'Intercultural Coaching',
                	'body_class' => 'coaching'
                ]);
});

Route::get('training', function () {
    return view('training',
                [
                	'page_title' => 'Training',
                	'body_class' => 'training'
                ]);
});

Route::get('development', function () {
    return view('programdevelopment', 
                [
                	'page_title' => 'Program Development',
                	'body_class' => 'development'
                ]);
});

Route::get('thanks', function () {
    return view('thankyou', 
                [
                	'page_title' => 'Thank You',
                	'body_class' => 'thanks'
                ]);
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
