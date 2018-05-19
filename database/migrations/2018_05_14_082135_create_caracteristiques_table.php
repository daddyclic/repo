<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristiquesTable extends Migration {

	public function up()
	{
		Schema::create('caracteristiques', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('millesime');
			$table->integer('nbCouchage');
			$table->integer('nbCarteGrise');
			$table->integer('nbSalon');
			$table->float('longueur');
			$table->float('largeur');
			$table->float('hauteur');
			$table->integer('eauPropre');
			$table->integer('eauUsee');
			$table->integer('PTAC');
			$table->integer('charge');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('caracteristiques');
	}
}