<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoPermissaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_permissao', function(Blueprint $table)
		{
			$table->string('co_usuario', 20)->default('')->index('co_usuario');
			$table->enum('permissao_intervalo', array('0','1'))->default('0');
			$table->enum('permissao_hora_extra', array('0','1'))->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_permissao');
	}

}
