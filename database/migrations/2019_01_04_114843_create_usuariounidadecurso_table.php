<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariounidadecursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuariounidadecurso', function(Blueprint $table)
		{
			$table->integer('CodUsuarioUnidadeCurso')->primary();
			$table->integer('CodUnidadesCurso')->index('fk_UsuarioUnidadeCurso_UnidadesCurso1');
			$table->integer('CodUsuario')->index('CodUsuario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuariounidadecurso');
	}

}
