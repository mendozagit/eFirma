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
Route::resource('/csemestre','IndexController');
Route::resource('/ccalificaciones','CcalificacionesController');
Route::resource('/chorario','ChorarioController');

Route::resource('/ckardex','CkardexController');
Route::resource('/cvacaciones','CvacacionesController');

Route::get('/login', function () {
    return view('welcome');
});
