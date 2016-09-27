<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('type', 45);
			$table->string('first_name', 45);
			$table->string('last_name', 45);
			$table->string('address', 45);
			$table->integer('postcode');
			$table->string('city', 45);
			$table->string('country', 45);
			$table->integer('phone_number')->nullable();
			$table->string('mobile_number', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('website', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}
