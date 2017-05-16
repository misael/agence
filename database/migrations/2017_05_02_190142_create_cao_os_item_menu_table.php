<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoOsItemMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_os_item_menu', function(Blueprint $table)
		{
			$table->integer('co_item', true);
			$table->string('ds_item')->default('');
			$table->integer('co_sistema')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_os_item_menu');
	}

}
