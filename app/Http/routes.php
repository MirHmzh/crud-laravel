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

Route::get('/', array ('as' => 'beranda', 'uses' => 'BiodataController@index'));

Route::get('buat', array('as' => 'baru', 'uses' => 'BiodataController@baru'));

Route::post('buat',array('as' => 'buat', 'uses' => 'BiodataController@buat'));

Route::get('lihat/{id}',array('as' => 'lihat', 'uses' => 'BiodataController@lihat'));

Route::get('ubah/{id}',array('as' => 'ubah', 'uses' => 'BiodataController@ubah'));

Route::put('ubah/{id}',array('as' => 'ganti', 'uses' => 'BiodataController@ganti'));

Route::get('hapus/{id}',array('as' => 'hapus', 'uses' => 'BiodataController@hapus'));