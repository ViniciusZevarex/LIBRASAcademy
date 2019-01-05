<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRespostaduvidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('respostaduvida', function(Blueprint $table)
		{
			$table->foreign('CodUsuario', 'respostaduvida_ibfk_1')->references('CodUsuario')->on('usuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('CodDuvidas', 'respostaduvida_ibfk_2')->references('CodDuvidas')->on('duvidas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('respostaduvida', function(Blueprint $table)
		{
			$table->dropForeign('respostaduvida_ibfk_1');
			$table->dropForeign('respostaduvida_ibfk_2');
		});
	}

}
