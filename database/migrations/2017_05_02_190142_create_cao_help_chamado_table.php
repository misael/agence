<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoHelpChamadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_help_chamado', function(Blueprint $table)
		{
			$table->integer('co_chamado', true);
			$table->text('ds_chamado', 65535);
			$table->text('ds_solucao', 65535)->nullable();
			$table->boolean('co_status')->default(0);
			$table->integer('co_motivo')->default(0);
			$table->integer('co_tela')->default(0);
			$table->integer('co_autor')->default(0);
			$table->integer('co_filial')->default(0);
			$table->bigInteger('co_sistema')->default(0);
			$table->date('dt_chamado')->default('0000-00-00');
			$table->date('dt_solucao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_help_chamado');
	}

}
