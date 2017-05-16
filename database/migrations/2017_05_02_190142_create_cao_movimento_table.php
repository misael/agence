<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoMovimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_movimento', function(Blueprint $table)
		{
			$table->bigInteger('co_movimento', true)->unsigned();
			$table->string('co_usuario', 50)->default('');
			$table->dateTime('dt_entrada')->default('0000-00-00 00:00:00');
			$table->dateTime('dt_saida_almoco')->default('0000-00-00 00:00:00');
			$table->dateTime('dt_volta_almoco')->default('0000-00-00 00:00:00');
			$table->dateTime('dt_saida')->default('0000-00-00 00:00:00');
			$table->boolean('is_encerrado')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_movimento');
	}

}
