<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoAtividadeConsultorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_atividade_consultor', function(Blueprint $table)
		{
			$table->integer('co_atividade', true);
			$table->string('ds_atividade', 50)->default('');
			$table->char('ativo', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_atividade_consultor');
	}

}
