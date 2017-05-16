<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoBancoHorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_banco_horas', function(Blueprint $table)
		{
			$table->increments('co_banc_horas');
			$table->string('co_usuario', 20)->default('');
			$table->string('periodo', 7)->default('');
			$table->integer('min_mes')->default(0);
			$table->integer('min_ferias')->default(0);
			$table->integer('min_pago')->default(0);
			$table->integer('min_total')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_banco_horas');
	}

}
