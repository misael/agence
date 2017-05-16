<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_usuario', function(Blueprint $table)
		{
			$table->bigInteger('co_tipo_usuario')->unsigned()->default(0);
			$table->string('ds_tipo_usuario', 32)->default('');
			$table->bigInteger('co_sistema')->unsigned()->default(0);
			$table->primary(['co_tipo_usuario','co_sistema']);
			$table->index(['co_tipo_usuario','co_sistema'], 'co_tipo_usuario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_usuario');
	}

}
