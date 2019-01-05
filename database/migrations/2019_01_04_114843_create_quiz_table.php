<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuizTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quiz', function(Blueprint $table)
		{
			$table->integer('CodQuiz')->primary();
			$table->integer('CodmoduloUnidade')->index('CodmoduloUnidade');
			$table->string('Pergunta', 45);
			$table->string('video', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quiz');
	}

}
