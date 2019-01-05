<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlternativasquizTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alternativasquiz', function(Blueprint $table)
		{
			$table->integer('CodAlternativasQuiz')->primary();
			$table->integer('CodQuiz')->index('CodQuiz');
			$table->string('Descricao', 100);
			$table->boolean('correta');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alternativasquiz');
	}

}
