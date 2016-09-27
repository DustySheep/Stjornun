<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipmentLendingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipment_lendings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('brand', 45);
			$table->string('model', 45);
			$table->string('type', 45);
			$table->string('state', 45);
			$table->date('date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipment_lendings');
	}

}
