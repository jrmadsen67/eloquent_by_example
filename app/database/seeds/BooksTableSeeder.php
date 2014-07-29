<?php

class BooksTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('books')->delete();

		$faker = Faker\Factory::create();
		$faker->seed(1234);

		for ($i=1; $i <= 50; $i++) {

			Book::create(array(
				'id' => $i,
				'title' => $faker->catchPhrase,
			));
		}
	}

}