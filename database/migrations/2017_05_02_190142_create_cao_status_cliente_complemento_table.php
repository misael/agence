<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoStatusClienteComplementoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_status_cliente_complemento', function(Blueprint $table)
		{
			$table->increments('co_complemento_status');
			$table->string('ds_status', 50)->nullable()->default('');
			$table->integer('co_status')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_status_cliente_complemento');
	}

}
