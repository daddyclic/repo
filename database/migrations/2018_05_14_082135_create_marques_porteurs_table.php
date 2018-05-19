<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarquesPorteursTable extends Migration {

	public function up()
	{
		Schema::create('marques_porteurs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libelle', 50)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('marques_porteurs');
	}
}