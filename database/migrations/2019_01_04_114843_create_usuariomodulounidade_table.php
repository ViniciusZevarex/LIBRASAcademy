<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariomodulounidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuariomodulounidade', function(Blueprint $table)
		{
			$table->increments('CodUsuarioModuloUnidade')->primary();
			$table->integer('CodmoduloUnidade')->index('CodmoduloUnidade');
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
		Schema::drop('usuariomodulounidade');
	}

}
