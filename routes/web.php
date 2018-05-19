<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('marquecellule', 'MarqueCelluleController');
Route::resource('modeleporteur', 'ModelePorteurController');
Route::resource('caracteristique', 'CaracteristiqueController');
Route::resource('etat', 'EtatController');
Route::resource('equipement', 'EquipementController');
Route::resource('option', 'OptionController');
Route::resource('campingcar', 'CampingCarController');
Route::resource('image', 'ImageController');
Route::resource('modelecellule', 'ModeleCelluleController');
Route::resource('marqueporteur', 'MarquePorteurController');
Route::resource('type', 'TypeController');
