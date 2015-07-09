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




Route::get('getAllLokasi','ApiController@getAllLokasi');

Route::get('getInfoDetail','ApiController@getInfoDetail');

Route::get('getAllFilteredByLocation','ApiController@getAllFilteredByLocation');

Route::get('getAllFilteredByKeterangan','ApiController@getAllFilteredByKeterangan');

Route::get('index','ApiController@index');

Route::resource('laporan','LaporanController');

Route::resource('user','UserController');

Route::resource('stum','StumController');

Route::get('jadwal', function() {
  return View::make('jadwal.jadwal');
});
Route::post('jadwal', 'JadwalController@upload');