<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoCustoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_custo', function(Blueprint $table)
		{
			$table->bigInteger('co_custo', true)->unsigned();
			$table->boolean('co_tipo_custo')->default(0);
			$table->string('descricao', 100)->default('0');
			$table->boolean('co_escritorio')->default(0);
			$table->date('dt_compra')->nullable();
			$table->date('dt_pagamento')->nullable();
			$table->text('co_boleto', 65535)->nullable();
			$table->float('valor', 10, 0)->default(0);
			$table->string('parcela', 5)->nullable();
			$table->boolean('pag')->nullable();
			$table->bigInteger('co_custo_high')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_custo');
	}

}
