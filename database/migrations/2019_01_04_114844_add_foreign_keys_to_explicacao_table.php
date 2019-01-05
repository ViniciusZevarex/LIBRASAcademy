<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExplicacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('explicacao', function(Blueprint $table)
		{
			$table->foreign('CodmoduloUnidade', 'explicacao_ibfk_1')->references('CodmoduloUnidade')->on('modulounidade')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('explicacao', function(Blueprint $table)
		{
			$table->dropForeign('explicacao_ibfk_1');
		});
	}

}
