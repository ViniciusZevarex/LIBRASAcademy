<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModulounidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modulounidade', function(Blueprint $table)
		{
			$table->integer('CodmoduloUnidade')->primary();
			$table->integer('CodUnidadesCurso')->index('CodUnidadesCurso');
			$table->string('NomeModulo', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('modulounidade');
	}

}
