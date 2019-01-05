<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToModulounidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('modulounidade', function(Blueprint $table)
		{
			$table->foreign('CodUnidadesCurso', 'modulounidade_ibfk_1')->references('CodUnidadesCurso')->on('unidadescurso')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('modulounidade', function(Blueprint $table)
		{
			$table->dropForeign('modulounidade_ibfk_1');
		});
	}

}
