<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('AuthorsTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('BooksTableSeeder');
		$this->call('AuthorBooksTableSeeder');
	}

}
