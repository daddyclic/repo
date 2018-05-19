<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtatsTable extends Migration {

	public function up()
	{
		Schema::create('etats', function(Blueprint $table) {
			$table->increments('id');
			$table->boolean('neuf');
			$table->boolean('vendu');
			$table->boolean('affichage');
		});
	}

	public function down()
	{
		Schema::drop('etats');
	}
}