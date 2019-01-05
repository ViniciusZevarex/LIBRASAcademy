<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExplicacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('explicacao', function(Blueprint $table)
		{
			$table->integer('CodExplicacao')->primary();
			$table->integer('CodmoduloUnidade')->index('CodmoduloUnidade');
			$table->string('Titulo', 45);
			$table->string('Descricao', 1000);
			$table->string('Video', 45);
			$table->integer('CodSubEtapa');
			$table->string('Explicacaocol', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('explicacao');
	}

}
