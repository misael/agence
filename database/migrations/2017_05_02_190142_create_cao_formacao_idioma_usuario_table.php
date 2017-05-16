<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoFormacaoIdiomaUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_formacao_idioma_usuario', function(Blueprint $table)
		{
			$table->string('co_usuario', 20)->default('');
			$table->integer('co_idioma')->default(0);
			$table->integer('nv_leitura')->nullable();
			$table->integer('nv_escrita')->nullable();
			$table->integer('nv_fala')->nullable();
			$table->primary(['co_usuario','co_idioma']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_formacao_idioma_usuario');
	}

}
