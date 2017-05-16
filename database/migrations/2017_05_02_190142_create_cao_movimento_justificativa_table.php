<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoMovimentoJustificativaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_movimento_justificativa', function(Blueprint $table)
		{
			$table->bigInteger('co_movimento_justificativa', true)->unsigned();
			$table->bigInteger('co_movimento')->unsigned()->default(0);
			$table->bigInteger('nu_os')->unsigned()->default(0);
			$table->text('ds_justificativa');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_movimento_justificativa');
	}

}
