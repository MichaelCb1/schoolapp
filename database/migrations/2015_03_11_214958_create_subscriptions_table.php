<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriptions', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('parent_firstname');
            $table->string('parent_lastname');
            $table->string('email')->unique();
            $table->string('child_firstname');
            $table->string('child_lastname');
            $table->datetime('birthday');
            $table->integer('entrydate_id')->unsigned()->default(1);
            $table->foreign('entrydate_id')->references('id')->on('entrydates');
            $table->integer('school_id')->unsigned()->default(0);
            $table->foreign('school_id')->references('id')->on('schools');
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
		Schema::drop('subscriptions');
	}

}
