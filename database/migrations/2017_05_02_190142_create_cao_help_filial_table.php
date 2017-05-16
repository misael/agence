<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoHelpFilialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_help_filial', function(Blueprint $table)
		{
			$table->increments('co_filial');
			$table->string('no_filial', 70)->default('');
			$table->integer('co_cliente')->default(0);
			$table->char('estado', 2)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_help_filial');
	}

}
