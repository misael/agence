<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaoDiaryReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cao_diary_report', function(Blueprint $table)
		{
			$table->integer('co_diary_report', true);
			$table->time('hr_gasta')->nullable()->default('00:00:00');
			$table->integer('co_atividade')->default(0);
			$table->text('ds_assunto');
			$table->bigInteger('co_movimento')->default(0);
			$table->bigInteger('nu_os')->unsigned()->nullable();
			$table->bigInteger('co_sistema')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cao_diary_report');
	}

}
