<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModelesPorteursTable extends Migration {

	public function up()
	{
		Schema::create('modeles_porteurs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_marque')->unsigned();
			$table->string('libelle', 50)->unique();
			$table->float('motorisation', 4,2);
			$table->float('puissance');
			$table->integer('couple');
			$table->integer('fiscaux');
			$table->timestamps();
			$table->unique(['id_marque', 'libelle', 'motorisation', 'puissance']);
		});
	}

	public function down()
	{
		Schema::drop('modeles_porteurs');
	}
}