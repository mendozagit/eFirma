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


Route::resource('/','IndexController');
Route::resource('/csemestre','CsemestreController');
Route::resource('/ccalificaciones','CcalificacionesController');
Route::resource('/chorario','ChorarioController');
Route::resource('/ckardex','CkardexController');
Route::resource('/cvacaciones','CvacacionesController');

Route::resource('/ventas','VentaController');

Route::resource('/configFirmate','ConfigFirmateController');
Route::resource('/configEspectador','ConfigEspectadorController');

Route::resource('/firmados','ConstanciaFirmadaController');

Route::resource('/validarce','ValidaCertificadoController');
Route::resource('/validarco','ValidaConstanciaController');









Route::get('/login', function () {
    return view('welcome');
});
