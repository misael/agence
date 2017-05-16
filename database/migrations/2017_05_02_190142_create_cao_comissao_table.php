<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoComissaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_comissao', function(Blueprint $table)
		{
			$table->integer('co_comissao', true);
			$table->integer('co_fatura')->default(0)->unique('co_fatura');
			$table->date('dt_efetuado')->default('0000-00-00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_comissao');
	}

}
