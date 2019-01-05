<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariounidadecursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuariounidadecurso', function(Blueprint $table)
		{
			$table->foreign('CodUnidadesCurso', 'fk_UsuarioUnidadeCurso_UnidadesCurso1')->references('CodUnidadesCurso')->on('unidadescurso')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('CodUsuario', 'usuariounidadecurso_ibfk_1')->references('CodUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuariounidadecurso', function(Blueprint $table)
		{
			$table->dropForeign('fk_UsuarioUnidadeCurso_UnidadesCurso1');
			$table->dropForeign('usuariounidadecurso_ibfk_1');
		});
	}

}
