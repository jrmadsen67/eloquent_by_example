<?php

class AuthorBooksTableSeeder extends Seeder 
{

	public function run()
	{
		$faker = Faker\Factory::create();

		DB::table('author_book')->delete();

		// TODO - if you're gonna do it, do it right, right, do it with ORM if we can
		for ($i=1; $i < 51; $i++) {

			$times = $faker->randomElement(array(1,1,1,1,1,1,2,2,2,3)); //we can have multiple authors per book

			for ($j=1; $j <= $times; $j++) {
				$author_book['book_id'] = $i;
				$author_book['author_id'] = $faker->randomElement(range(1,10));
				$author_book['created_at'] = new DateTime;
				$author_book['updated_at'] = new DateTime;

				DB::table('author_book')->insert($author_book);
			}
		}
	}

}

				
