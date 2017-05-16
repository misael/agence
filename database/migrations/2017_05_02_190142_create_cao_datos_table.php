<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoDatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_datos', function(Blueprint $table)
		{
			$table->string('no_usuario', 50)->default('');
			$table->string('co_usuario', 20)->default('');
			$table->date('data_emissao')->default('0000-00-00');
			$table->float('ganancia_neta', 19)->nullable();
			$table->float('costo_fijo', 19)->default(0.00);
			$table->float('comision', 19)->nullable();
			$table->float('beneficio', 19)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_datos');
	}

}
