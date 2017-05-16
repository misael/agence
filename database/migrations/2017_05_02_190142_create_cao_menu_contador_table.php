<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoMenuContadorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_menu_contador', function(Blueprint $table)
		{
			$table->string('co_usuario', 20)->default('');
			$table->boolean('co_menu')->default(0);
			$table->boolean('nu_pontos')->default(0);
			$table->boolean('in_processado')->default(0);
			$table->primary(['co_usuario','co_menu']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_menu_contador');
	}

}
