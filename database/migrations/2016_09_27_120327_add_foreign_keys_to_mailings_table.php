<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMailingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mailings', function(Blueprint $table)
		{
			$table->foreign('recipient', 'fk_mailings_clients')->references('id')->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mailings', function(Blueprint $table)
		{
			$table->dropForeign('fk_mailings_clients');
		});
	}

}
