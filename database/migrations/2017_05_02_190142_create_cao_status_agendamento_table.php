<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoStatusAgendamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_status_agendamento', function(Blueprint $table)
		{
			$table->bigInteger('co_status_agendamento', true)->unsigned();
			$table->string('ds_status_agendamento', 20)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_status_agendamento');
	}

}
