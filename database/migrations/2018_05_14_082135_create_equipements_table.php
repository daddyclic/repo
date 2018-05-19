<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipementsTable extends Migration {

	public function up()
	{
		Schema::create('equipements', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_campingcar')->unsigned();
			$table->string('libelle')->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('equipements');
	}
}