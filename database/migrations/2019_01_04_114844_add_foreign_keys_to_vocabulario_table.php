<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVocabularioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vocabulario', function(Blueprint $table)
		{
			$table->foreign('CodModuloUnidade', 'vocabulario_ibfk_1')->references('CodmoduloUnidade')->on('modulounidade')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vocabulario', function(Blueprint $table)
		{
			$table->dropForeign('vocabulario_ibfk_1');
		});
	}

}
