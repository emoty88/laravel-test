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
	return View::make('hello');
});

Route::get('kullanicilar', function()
{
    return View::make('kullanicilar');
});

Route::get('users', function (){
	$users = User::all();
	
	return View::make('users')->with('users',$users);
});

Route::get('form', function(){
	return View::make('form');
});

Route::post('form', function (){
	echo "post";
});

Route::get('post/create', 'PostController@create');

Route::get('post/all', 'PostController@show_all');

Route::get('category/{id}', 'CategoryController@show');

Route::get('add_category', function(){
	return View::make("add_category");	
});

Route::get('add_post', function(){
	
	$categories = Category::get()->lists('name','id' );
	return View::make('add_post')->with('categories', $categories);
});


Route::post('api/add_post', 'PostController@create');
Route::post('api/add_category', 'CategoryController@create');
Route::get('api/get_posts', function () {
	echo Post::take(10)->get()->toJson();
});

Route::get('api/get_categories', function(){
	echo Category::take(10)->get()->toJson();
});

