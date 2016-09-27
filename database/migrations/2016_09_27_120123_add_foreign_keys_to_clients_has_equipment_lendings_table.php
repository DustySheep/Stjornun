<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientsHasEquipmentLendingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clients_has_equipment_lendings', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_clients_has_equipment_lendings_clients1')->references('id')->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('equipment_lending_id', 'fk_clients_has_equipment_lendings_equipment_lendings1')->references('id')->on('equipment_lendings')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clients_has_equipment_lendings', function(Blueprint $table)
		{
			$table->dropForeign('fk_clients_has_equipment_lendings_clients1');
			$table->dropForeign('fk_clients_has_equipment_lendings_equipment_lendings1');
		});
	}

}
