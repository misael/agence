<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoSistemaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_sistema', function(Blueprint $table)
		{
			$table->integer('co_sistema', true);
			$table->integer('co_cliente')->unsigned()->nullable()->default(0);
			$table->string('co_usuario', 50)->nullable()->default('0');
			$table->integer('co_arquitetura')->unsigned()->nullable()->default(0);
			$table->string('no_sistema', 200)->nullable();
			$table->text('ds_sistema_resumo', 65535)->nullable();
			$table->text('ds_caracteristica', 65535)->nullable();
			$table->text('ds_requisito', 65535)->nullable();
			$table->string('no_diretoria_solic', 100)->nullable();
			$table->string('ddd_telefone_solic', 5)->nullable();
			$table->string('nu_telefone_solic', 20)->nullable();
			$table->string('no_usuario_solic', 100)->nullable();
			$table->date('dt_solicitacao')->nullable();
			$table->date('dt_entrega')->nullable();
			$table->integer('co_email')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_sistema');
	}

}
