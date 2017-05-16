<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoTipoConhecimentoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_tipo_conhecimento_usuario', function(Blueprint $table)
		{
			$table->increments('co_conhecimento');
			$table->string('ds_conhecimento', 20)->nullable();
			$table->integer('co_sistema')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_tipo_conhecimento_usuario');
	}

}
