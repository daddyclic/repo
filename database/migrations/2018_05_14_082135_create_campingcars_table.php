<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampingcarsTable extends Migration {

	public function up()
	{
		Schema::create('campingcars', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_etat')->unsigned();
			$table->integer('id_cellule')->unsigned();
			$table->integer('id_porteur')->unsigned();
			$table->integer('id_caracteristique')->unsigned();
			$table->integer('id_type')->unsigned();
			$table->float('prix');
			$table->date('MEC');
			$table->integer('kilometrage');
			$table->longText('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('campingcars');
	}
}