<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlternativasquizTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alternativasquiz', function(Blueprint $table)
		{
			$table->foreign('CodQuiz', 'alternativasquiz_ibfk_1')->references('CodQuiz')->on('quiz')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alternativasquiz', function(Blueprint $table)
		{
			$table->dropForeign('alternativasquiz_ibfk_1');
		});
	}

}
