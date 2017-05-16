<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoSistemaObsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_sistema_obs', function(Blueprint $table)
		{
			$table->increments('co_obs');
			$table->text('descricao', 65535)->nullable();
			$table->bigInteger('co_sistema')->nullable();
			$table->string('co_usuario', 20)->nullable();
			$table->dateTime('dt_obs')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_sistema_obs');
	}

}
