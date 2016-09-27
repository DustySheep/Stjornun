<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsHasEquipmentLendingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients_has_equipment_lendings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('client_id')->index('fk_clients_has_equipment_lendings_clients1_idx');
			$table->integer('equipment_lending_id')->index('fk_clients_has_equipment_lendings_equipment_lendings1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients_has_equipment_lendings');
	}

}
