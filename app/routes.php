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


// Please add your routes to the most appropriate group below. "name" is my own experimentation; may switch that to prefix later
Route::group(array('name'=>'simple'), function(){

	Route::get('/simple/get_all', function()
	{
		$posts = \Post::all();
		return \View::make('simple.get_all')->with('posts', $posts);
	});

	Route::get('/simple/get_one/{id}', function($id)
	{
		$post = \Post::find($id);
		return \View::make('simple.get_one')->with('post', $post);
	});

	Route::get('/simple/get_women/', function()
	{
		$authors = \Author::women()->get();
		return \View::make('simple.get_women')->with('authors', $authors);
	});

	Route::get('/simple/get_by_gender/{gender}', function($gender)
	{
		$authors = \Author::gender($gender)->get();
		return \View::make('simple.get_by_gender')->with('authors', $authors);
	});

	Route::get('/simple/get_author_full/{id}', function($id)
	{
		$author = \Author::find($id);
		return \View::make('simple.get_author_full')->with('author', $author);
	});	

	// put more routes for simple examples below...

});

Route::group(array('name'=>'intermediate'), function(){

});

Route::group(array('name'=>'advanced'), function(){

});