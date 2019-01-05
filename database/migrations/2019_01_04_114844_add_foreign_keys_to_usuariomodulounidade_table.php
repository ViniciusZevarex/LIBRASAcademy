<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariomodulounidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuariomodulounidade', function(Blueprint $table)
		{
			$table->foreign('CodmoduloUnidade', 'usuariomodulounidade_ibfk_1')->references('CodmoduloUnidade')->on('modulounidade')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('CodUsuario', 'usuariomodulounidade_ibfk_2')->references('CodUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuariomodulounidade', function(Blueprint $table)
		{
			$table->dropForeign('usuariomodulounidade_ibfk_1');
			$table->dropForeign('usuariomodulounidade_ibfk_2');
		});
	}

}
