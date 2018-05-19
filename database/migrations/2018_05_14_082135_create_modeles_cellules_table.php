<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModelesCellulesTable extends Migration {

	public function up()
	{
		Schema::create('modeles_cellules', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_marque')->unsigned();
			$table->string('libelle', 50)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('modeles_cellules');
	}
}