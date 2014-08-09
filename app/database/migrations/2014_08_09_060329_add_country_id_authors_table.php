<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCountryIdAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('authors', function(Blueprint $table)
		{
			$table->integer('country_id')->after('birthday')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('authors', function(Blueprint $table)
		{
			$table->dropColumn('country_id');
		});
	}

}
