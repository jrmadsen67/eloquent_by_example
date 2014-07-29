<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthorBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('author_book', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('author_id')->unsigned()->index();
			$table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
			$table->integer('book_id')->unsigned()->index();
			$table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('author_book');
	}

}
