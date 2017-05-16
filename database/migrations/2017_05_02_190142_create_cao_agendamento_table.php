<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoAgendamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_agendamento', function(Blueprint $table)
		{
			$table->bigInteger('co_agendamento', true)->unsigned();
			$table->dateTime('dt_hr_inicio')->default('0000-00-00 00:00:00');
			$table->dateTime('dt_hr_fim')->nullable();
			$table->bigInteger('co_status_agendamento')->default(0);
			$table->bigInteger('co_diary_report_consultor')->default(0);
			$table->bigInteger('co_complemento')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_agendamento');
	}

}
