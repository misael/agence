<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoArquiteturaOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_arquitetura_os', function(Blueprint $table)
		{
			$table->bigInteger('co_arquitetura')->default(0)->primary();
			$table->string('ds_arquitetura', 20)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_arquitetura_os');
	}

}
