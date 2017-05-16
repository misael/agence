<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoValorDescansoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_valor_descanso', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('co_usuario', 40)->default('');
			$table->string('segundos', 50)->default('');
			$table->string('mes_referencia', 50)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_valor_descanso');
	}

}
