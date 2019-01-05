<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDuvidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('duvidas', function(Blueprint $table)
		{
			$table->foreign('CodUsuario', 'duvidas_ibfk_1')->references('CodUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('duvidas', function(Blueprint $table)
		{
			$table->dropForeign('duvidas_ibfk_1');
		});
	}

}
