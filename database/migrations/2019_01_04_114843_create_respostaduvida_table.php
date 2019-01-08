<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRespostaduvidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respostaduvida', function(Blueprint $table)
		{
			$table->increments('CodRespostaDuvida')->primary();
			$table->integer('CodUsuario')->index('CodUsuario');
			$table->integer('CodDuvidas')->index('CodDuvidas');
			$table->string('Descricao', 1000);
			$table->dateTime('Data');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('respostaduvida');
	}

}
