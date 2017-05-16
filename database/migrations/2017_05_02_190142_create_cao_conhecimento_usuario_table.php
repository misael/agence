<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoConhecimentoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_conhecimento_usuario', function(Blueprint $table)
		{
			$table->string('co_usuario', 20)->default('');
			$table->integer('co_conhecimento')->unsigned()->default(0);
			$table->integer('nv_conhecimento')->unsigned()->nullable();
			$table->boolean('is_certificado')->nullable();
			$table->primary(['co_usuario','co_conhecimento']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_conhecimento_usuario');
	}

}
