<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoPermissaoHoraExtraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_permissao_hora_extra', function(Blueprint $table)
		{
			$table->integer('id_permissao', true);
			$table->bigInteger('co_movimento')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_permissao_hora_extra');
	}

}
