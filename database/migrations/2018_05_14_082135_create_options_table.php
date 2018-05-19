<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionsTable extends Migration {

	public function up()
	{
		Schema::create('options', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_campingcar')->unsigned();
			$table->string('libelle')->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('options');
	}
}