<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnidadescursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidadescurso', function(Blueprint $table)
		{
			$table->increments('CodUnidadesCurso')->primary();
			$table->integer('CodCurso')->index('CodCurso');
			$table->string('NomeUnidade', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unidadescurso');
	}

}
