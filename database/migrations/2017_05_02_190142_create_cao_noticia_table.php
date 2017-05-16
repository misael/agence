<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoNoticiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_noticia', function(Blueprint $table)
		{
			$table->integer('co_noticia', true);
			$table->string('assunto')->default('');
			$table->text('descricao', 65535);
			$table->string('foto')->default('');
			$table->string('co_usuario', 60)->default('');
			$table->dateTime('dt_noticia')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_noticia');
	}

}
