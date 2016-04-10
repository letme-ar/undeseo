<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('avisos', 'AvisoController');
Route::get('avisos/{slug}/{id}',['as' => 'avisos','uses' => 'AvisoController@edit']);
Route::post("avisos/update",array('as' => 'avisos.update','uses'  => 'AvisoController@update'));


Route::post("avisos/validarDatos",array('as' => 'avisos.validarDatos','uses'  => 'AvisoController@validarDatos'));

Route::post("rubros/darComboSubRubros",array('as' => 'rubros.darComboSubRubros','uses'  => 'RubroController@darComboSubRubrosPorRubro'));

