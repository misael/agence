<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoRelEmailOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_rel_email_os', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('co_email')->default(0);
			$table->integer('co_os')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_rel_email_os');
	}

}
