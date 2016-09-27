<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInterventionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interventions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('category', 45);
			$table->date('order_date');
			$table->date('delivery_date')->nullable();
			$table->integer('client_id')->index('fk_interventions_clients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('interventions');
	}

}
