<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDuvidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('duvidas', function(Blueprint $table)
		{
			$table->integer('CodDuvidas')->primary();
			$table->integer('CodUsuario')->index('CodUsuario');
			$table->string('Descricao', 1000);
			$table->string('Titulo', 45);
			$table->dateTime('Date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('duvidas');
	}

}
