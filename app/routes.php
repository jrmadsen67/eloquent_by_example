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

	Route::get('/simple/has_one_author/{id}', function($id)
	{
		$author = \Post::find($id)->author;
		return \View::make('simple.has_one_author')->with('author', $author);
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

	Route::get('/simple/get_authors_has_posts', function()
	{
		// TODO: all of our authors actually have posts, so you don't see the filter (but this works)
		$authors = \Author::has('posts')->get();
		return \View::make('simple.get_authors_has_posts')->with('authors', $authors);
	});	
	// put more routes for simple examples below...

});

Route::group(array('name'=>'intermediate'), function(){

	Route::get('/intermediate/author_many_books/{id}', function($id)
	{
		// This will grab only the books
		$books = \Author::find($id)->books;
		return \View::make('intermediate.author_many_books')->with('books', $books);
	});	


	// This would normall be done in an PUT or POST, but for symplicity..
	Route::get('/intermediate/author_books_sync/{id}', function($id)
	{
		$author = \Author::find($id);

		$books_authored = array(1,4,12);
		$author->books()->sync($books_authored);

		// now you can play with this a bit, adding & removing books like this:
		//$author->books()->attach(8); 

		//$author->books()->detach(1); 		
		
		return \View::make('intermediate.author_books_sync')->with('author', $author);
	});	

	Route::get('/intermediate/author_lastname_accessor', function()
	{
		$authors = \Author::all();
		return \View::make('intermediate.author_lastname_accessor')->with('authors', $authors);
	});	


});

Route::group(array('name'=>'advanced'), function(){

});