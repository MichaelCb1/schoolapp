<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('phonenumber')->default('');
            $table->string('website')->default('');
            $table->string('address')->default('');
            $table->integer('town_id')->unsigned()->default(0);
            $table->foreign('town_id')->references('id')->on('zipcodes');
            $table->integer('region_id')->unsigned()->default(0);
            $table->foreign('region_id')->references('id')->on('regions');
            $table->string('url_small')->default('');
            $table->string('url_big')->default('');
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
		Schema::drop('schools');
	}

}
