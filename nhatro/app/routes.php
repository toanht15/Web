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

	$posts = Post::orderBy('created_at', 'DESC')->paginate(8);
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

Route::resource('posts', 'PostsController');
//Edit
Route::get('posts/{id}', function($post_id)
{
	$post = Post::whereId($post_id)->first();
	$user = User::find($post->user_id);
	return View::make('posts.show')->with('post', $post);//->with('user', $user);
	
});

Route::get('users/{user_id}/listposts', 'UsersController@show');
Route::get('users/listusers', function()
{
	$users = User::all();
	return View::make('users.listusers')->with('users', $users);
});
//get
Route::get('edit-profile',function(){
	return View::make('users.show');
});
Route::get('logout','UsersController@logout');
//post
Route::post('register','UsersController@postRegister');
Route::post('login','UsersController@postLogin');
Route::post('change-password','UsersController@postChangePassword');
Route::post('check-email','UsersController@check');

Route::post('search','PostsController@search');
Route::post('search2','PostsController@search_string');

Route::post('/posts/create','PostsController@store');

Route::post('edit-profile','UsersController@edit_profile');