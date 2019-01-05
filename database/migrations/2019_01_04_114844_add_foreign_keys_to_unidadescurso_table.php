<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUnidadescursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('unidadescurso', function(Blueprint $table)
		{
			$table->foreign('CodCurso', 'unidadescurso_ibfk_1')->references('CodCurso')->on('curso')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('unidadescurso', function(Blueprint $table)
		{
			$table->dropForeign('unidadescurso_ibfk_1');
		});
	}

}
