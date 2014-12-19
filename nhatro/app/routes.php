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
	$posts = Post::orderBy('created_at', 'DESC')->paginate(5);
	// $user = User::whereId($posts->user_id)->first();
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

Route::get('posts/{post_id}', function($id)
{
	$post = Post::wherePost_id($id)->first();
	$user = User::whereId($post['user_id'])->first();
	return View::make('posts.show')->with('post', $post)->with('user', $user);
});
//Route::resource('users', 'UsersController');
Route::get('users/{id}/listposts', function($id)
{
	$post = Post::where('id', '=', $id)->get();
	return View::make('users.listposts')->with('posts', $post);
});

// Route::get('users/{id}', function($id)
// {
// 	$u = User::whereId($id)->first();
// 	return View::make('users.show')->with('u', $u);
// });

Route::resource('posts', 'PostsController');

Route::get('users/listusers', function()
{
	$users = User::all();
	return View::make('users.listusers')->with('users', $users);
});
//Edit

//get
Route::get('edit-profile','UsersController@edit_profile');
Route::get('logout','UsersController@logout');
//post
Route::post('register','UsersController@postRegister');
Route::post('login','UsersController@postLogin');
Route::post('change-password','UsersController@postChangePassword');
Route::post('check-email','UsersController@check');