<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesHasInterventionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services_has_interventions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('service_id')->index('fk_services_has_interventions_services1_idx');
			$table->integer('intervention_id')->index('fk_services_has_interventions_interventions1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('services_has_interventions');
	}

}
