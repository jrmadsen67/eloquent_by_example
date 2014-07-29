<?php

class AuthorsTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('authors')->delete();

		$faker = Faker\Factory::create();
		$faker->seed(1234);

		for ($i=1; $i <= 10; $i++) {

			Author::create(array(
				'id' => $i,
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'gender'=> $faker->randomElement(array('female', 'male')),
				'birthday' => $faker->dateTimeThisCentury(), //make max 25 yrs ago; make timestamp

			));

		}


	}

}