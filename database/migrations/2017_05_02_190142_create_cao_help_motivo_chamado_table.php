<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoHelpMotivoChamadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_help_motivo_chamado', function(Blueprint $table)
		{
			$table->integer('co_motivo', true);
			$table->string('ds_motivo', 70)->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_help_motivo_chamado');
	}

}
