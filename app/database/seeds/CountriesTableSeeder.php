<?php

class CountriesTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('countries')->delete();

		Country::create(array(
			'country' => 'US',
		));

		Country::create(array(
			'country' => 'Australia',
		));

		Country::create(array(
			'country' => 'UK',
		));

		Country::create(array(
			'country' => 'India',
		));

		Country::create(array(
			'country' => 'France',
		));

	}

}