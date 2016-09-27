<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInterventionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('interventions', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_interventions_clients1')->references('id')->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('interventions', function(Blueprint $table)
		{
			$table->dropForeign('fk_interventions_clients1');
		});
	}

}
