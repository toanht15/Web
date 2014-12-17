<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$posts = DB::table('posts')->paginate(5);
	
	return View::make('pages.home')->with('posts', $posts);
});

Route::get('/about', function()
{
	return View::make('pages.about');
});

Route::get('/contact', function()
{
	return View::make('pages.contact');
});

Route::get('users/show', function()
{
	return View::make('users.show');
});
//Route::resource('users', 'UsersController');

Route::resource('posts', 'PostsController');

//Edit

//get
Route::get('logout','UsersController@logout');
//post
Route::post('register','UsersController@postRegister');
Route::post('login','UsersController@postLogin');
Route::post('change-password','UsersController@postChangePassword');
Route::post('check-email','UsersController@check');