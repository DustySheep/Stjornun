<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suppliers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('compagny', 45);
			$table->string('address', 45);
			$table->integer('postcode');
			$table->string('city', 45);
			$table->string('country', 45);
			$table->integer('telephone_number');
			$table->integer('mobile_number');
			$table->string('email', 45);
			$table->string('website', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suppliers');
	}

}
