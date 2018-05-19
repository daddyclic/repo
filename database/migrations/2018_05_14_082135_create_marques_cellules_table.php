<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarquesCellulesTable extends Migration {

	public function up()
	{
		Schema::create('marques_cellules', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libelle', 50)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('marques_cellules');
	}
}