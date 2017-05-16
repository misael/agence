<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoOmbudsmanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_ombudsman', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('idtipo')->default(0)->index('idtipo');
			$table->boolean('idcategoria')->default(0)->index('idcategoria');
			$table->dateTime('data')->default('0000-00-00 00:00:00');
			$table->text('comentario', 65535);
			$table->boolean('co_escritorio')->default(0)->index('co_escritorio');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_ombudsman');
	}

}
