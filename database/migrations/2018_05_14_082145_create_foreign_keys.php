<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('modeles_porteurs', function(Blueprint $table) {
			$table->foreign('id_marque')->references('id')->on('marques_porteurs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('equipements', function(Blueprint $table) {
			$table->foreign('id_campingcar')->references('id')->on('campingcars')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('options', function(Blueprint $table) {
			$table->foreign('id_campingcar')->references('id')->on('campingcars')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->foreign('id_etat')->references('id')->on('etats')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->foreign('id_cellule')->references('id')->on('modeles_cellules')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->foreign('id_porteur')->references('id')->on('modeles_porteurs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->foreign('id_caracteristique')->references('id')->on('caracteristiques')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->foreign('id_type')->references('id')->on('types')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->foreign('id_campingcar')->references('id')->on('campingcars')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('modeles_cellules', function(Blueprint $table) {
			$table->foreign('id_marque')->references('id')->on('marques_cellules')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('modeles_porteurs', function(Blueprint $table) {
			$table->dropForeign('modeles_porteurs_id_marque_foreign');
		});
		Schema::table('equipements', function(Blueprint $table) {
			$table->dropForeign('equipements_id_campingcar_foreign');
		});
		Schema::table('options', function(Blueprint $table) {
			$table->dropForeign('options_id_campingcar_foreign');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->dropForeign('campingcars_id_etat_foreign');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->dropForeign('campingcars_id_cellule_foreign');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->dropForeign('campingcars_id_porteur_foreign');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->dropForeign('campingcars_id_caracteristique_foreign');
		});
		Schema::table('campingcars', function(Blueprint $table) {
			$table->dropForeign('campingcars_id_type_foreign');
		});
		Schema::table('images', function(Blueprint $table) {
			$table->dropForeign('images_id_campingcar_foreign');
		});
		Schema::table('modeles_cellules', function(Blueprint $table) {
			$table->dropForeign('modeles_cellules_id_marque_foreign');
		});
	}
}