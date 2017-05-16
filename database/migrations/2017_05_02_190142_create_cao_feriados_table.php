<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoFeriadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_feriados', function(Blueprint $table)
		{
			$table->boolean('dia')->nullable()->default(0);
			$table->boolean('mes')->nullable()->default(0);
			$table->integer('ano')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_feriados');
	}

}
