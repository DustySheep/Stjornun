<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServicesHasInterventionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('services_has_interventions', function(Blueprint $table)
		{
			$table->foreign('intervention_id', 'fk_services_has_interventions_interventions1')->references('id')->on('interventions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('service_id', 'fk_services_has_interventions_services1')->references('id')->on('services')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('services_has_interventions', function(Blueprint $table)
		{
			$table->dropForeign('fk_services_has_interventions_interventions1');
			$table->dropForeign('fk_services_has_interventions_services1');
		});
	}

}
