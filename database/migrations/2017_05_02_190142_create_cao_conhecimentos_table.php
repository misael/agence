<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoConhecimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_conhecimentos', function(Blueprint $table)
		{
			$table->integer('idconhecimento', true);
			$table->string('assunto', 100)->default('');
			$table->text('conhecimento', 65535);
			$table->text('url');
			$table->text('tags', 65535);
			$table->string('usuario', 20)->default('')->index('usuario');
			$table->dateTime('datahora')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_conhecimentos');
	}

}
