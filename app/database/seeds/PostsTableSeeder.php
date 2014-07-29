<?php

class PostsTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('posts')->delete();

		$faker = Faker\Factory::create();
		$faker->seed(1234);

		for ($i=1; $i <= 100; $i++) {

			Post::create(array(
				'id' => $i,
				'title' => $faker->catchPhrase,
				'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
				'status'=> $faker->randomElement(array('draft', 'published', 'archived')),
				'author_id' => $faker->randomElement(range(1,10)), // TODO: does it now support Active Record for Laravel?

			));

		}


	}

}