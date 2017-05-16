<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoFaturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_fatura', function(Blueprint $table)
		{
			$table->increments('co_fatura');
			$table->integer('co_cliente')->default(0);
			$table->integer('co_sistema')->default(0);
			$table->integer('co_os')->default(0);
			$table->integer('num_nf')->default(0);
			$table->float('total', 10, 0)->default(0);
			$table->float('valor', 10, 0)->default(0);
			$table->date('data_emissao')->default('0000-00-00');
			$table->text('corpo_nf', 65535);
			$table->float('comissao_cn', 10, 0)->default(0);
			$table->float('total_imp_inc', 10, 0)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_fatura');
	}

}
