<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->increments('CodUsuario')->primary();
			$table->string('Nome', 100);
			$table->date('DataNascimento');
			$table->string('FotoPerfil', 100)->nullable();
			$table->string('Email', 100);
			$table->string('Senha', 35);
			$table->string('permission')->default('app.user');
			$table->rememberToken();

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario');
	}

}
