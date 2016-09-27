<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('services', function(Blueprint $table)
		{
			$table->foreign('service_material_id', 'fk_services_services_material1')->references('id')->on('services_material')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('service_utility_id', 'fk_services_services_utility1')->references('id')->on('services_utility')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('services', function(Blueprint $table)
		{
			$table->dropForeign('fk_services_services_material1');
			$table->dropForeign('fk_services_services_utility1');
		});
	}

}
