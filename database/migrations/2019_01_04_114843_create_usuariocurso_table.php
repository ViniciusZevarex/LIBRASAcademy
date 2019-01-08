<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariocursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuariocurso', function(Blueprint $table)
		{
			$table->increments('CodUsuarioCurso')->primary();
			$table->integer('CodUsuario')->index('CodUsuario');
			$table->integer('CodCurso')->index('CodCurso');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuariocurso');
	}

}
