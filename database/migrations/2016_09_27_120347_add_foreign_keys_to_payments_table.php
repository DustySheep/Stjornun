<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('payments', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_payments_clients1')->references('id')->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('intervention_id', 'fk_payments_interventions1')->references('id')->on('interventions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('payments', function(Blueprint $table)
		{
			$table->dropForeign('fk_payments_clients1');
			$table->dropForeign('fk_payments_interventions1');
		});
	}

}
