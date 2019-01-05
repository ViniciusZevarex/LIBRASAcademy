<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVocabularioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vocabulario', function(Blueprint $table)
		{
			$table->integer('CodVocabulario')->primary();
			$table->integer('CodModuloUnidade')->index('CodModuloUnidade');
			$table->string('Significado', 45);
			$table->string('VideoSinal', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vocabulario');
	}

}
