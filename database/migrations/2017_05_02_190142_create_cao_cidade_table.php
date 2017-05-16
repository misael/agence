<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoCidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_cidade', function(Blueprint $table)
		{
			$table->bigInteger('co_cidade', true)->unsigned();
			$table->string('no_cidade', 30)->default('');
			$table->bigInteger('co_uf')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_cidade');
	}

}
