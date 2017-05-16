<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoCategoriasOmbudsmanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_categorias_ombudsman', function(Blueprint $table)
		{
			$table->boolean('idcategoria')->primary();
			$table->string('descricao', 100)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_categorias_ombudsman');
	}

}
