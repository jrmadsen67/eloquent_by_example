<?php

class AuthorsTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('authors')->delete();

		$faker = Faker\Factory::create();
		$faker->seed(1234);

		for ($i=1; $i <= 10; $i++) {

			$gender = $faker->randomElement(array('female', 'male'));

			Author::create(array(
				'id' => $i,
				'first_name' => $faker->firstName($gender),
				'last_name' => $faker->lastName,
				'gender'=> $gender,
				'birthday' => $faker->dateTimeThisCentury(date('1989-01-01')), //make max 25 yrs ago; TODO: make timestamp

			));

		}


	}

}