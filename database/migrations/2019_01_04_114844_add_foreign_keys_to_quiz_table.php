<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuizTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quiz', function(Blueprint $table)
		{
			$table->foreign('CodmoduloUnidade', 'quiz_ibfk_1')->references('CodmoduloUnidade')->on('modulounidade')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quiz', function(Blueprint $table)
		{
			$table->dropForeign('quiz_ibfk_1');
		});
	}

}
