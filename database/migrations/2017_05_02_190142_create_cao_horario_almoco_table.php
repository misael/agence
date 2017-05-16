<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoHorarioAlmocoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_horario_almoco', function(Blueprint $table)
		{
			$table->string('co_usuario')->default('');
			$table->string('almoco_saida_hora', 128)->default('0');
			$table->string('almoco_volta_hora', 128)->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_horario_almoco');
	}

}
