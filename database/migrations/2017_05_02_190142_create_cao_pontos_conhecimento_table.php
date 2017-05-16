<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoPontosConhecimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_pontos_conhecimento', function(Blueprint $table)
		{
			$table->integer('idpontos', true);
			$table->boolean('pontuacao')->default(0);
			$table->string('co_coordenador', 50)->default('')->index('co_coordenador');
			$table->integer('idconhecimento')->default(0)->index('idconhecimento');
			$table->index(['pontuacao','co_coordenador','idconhecimento'], 'pontuacao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_pontos_conhecimento');
	}

}
