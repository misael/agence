<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoOsPrazoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_os_prazo', function(Blueprint $table)
		{
			$table->integer('co_prazo', true);
			$table->integer('co_os')->nullable()->default(0);
			$table->integer('co_fase')->unsigned()->nullable()->default(0);
			$table->integer('total_analista')->nullable()->default(0);
			$table->integer('total_hora')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_os_prazo');
	}

}
