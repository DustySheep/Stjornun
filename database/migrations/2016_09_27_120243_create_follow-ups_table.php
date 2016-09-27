<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFollowUpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('follow-ups', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('date');
			$table->time('hour');
			$table->text('observation');
			$table->integer('client_id')->index('fk_follow-ups_clients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('follow-ups');
	}

}
