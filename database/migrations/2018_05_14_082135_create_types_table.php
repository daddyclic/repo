<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypesTable extends Migration {

	public function up()
	{
		Schema::create('types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libelle', 50)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('types');
	}
}