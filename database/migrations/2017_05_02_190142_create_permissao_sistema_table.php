<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissaoSistemaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissao_sistema', function(Blueprint $table)
		{
			$table->string('co_usuario', 20)->default('');
			$table->bigInteger('co_tipo_usuario')->unsigned()->default(0);
			$table->bigInteger('co_sistema')->unsigned()->default(0);
			$table->char('in_ativo', 1)->default('S');
			$table->string('co_usuario_atualizacao', 20)->nullable();
			$table->dateTime('dt_atualizacao')->default('0000-00-00 00:00:00');
			$table->primary(['co_usuario','co_tipo_usuario','co_sistema']);
			$table->index(['co_usuario','co_tipo_usuario','co_sistema','dt_atualizacao'], 'co_usuario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permissao_sistema');
	}

}
