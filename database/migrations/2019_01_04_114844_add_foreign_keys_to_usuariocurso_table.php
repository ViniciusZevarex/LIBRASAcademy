<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariocursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuariocurso', function(Blueprint $table)
		{
			$table->foreign('CodUsuario', 'usuariocurso_ibfk_1')->references('CodUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('CodCurso', 'usuariocurso_ibfk_2')->references('CodCurso')->on('curso')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuariocurso', function(Blueprint $table)
		{
			$table->dropForeign('usuariocurso_ibfk_1');
			$table->dropForeign('usuariocurso_ibfk_2');
		});
	}

}
