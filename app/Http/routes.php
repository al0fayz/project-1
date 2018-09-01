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


//halaman
Route::get('/home', 'pagecontroller@home');
Route::get('/home/{id}/detail', 'pagecontroller@detail');
Route::get('/petugas', 'pagecontroller@data');
Route::get('/vilage', 'pagecontroller@desa');
Route::get('/chart', 'kasuscontroller@index');
Route::get('/cha', 'kasuscontroller@chart');
//pengaduan
Route::get('pesan', 'aducontroller@index');
Route::get('/adu', 'aducontroller@adu');
Route::get('adu/{id}/show', 'aducontroller@detail');
Route::get('adu/{id}/hapus', 'aducontroller@hapus');
Route::post('adu', 'aducontroller@save');
Route::get('dashboard', function () {
    return view('admin.halaman.dashboard');
});
	//user
	Route::get('login', 'Auth\AuthController@showLoginForm');
	Route::post('login', 'Auth\AuthController@login');
	Route::get('logout', 'Auth\AuthController@logout');
	Route::get('register', 'Auth\AuthController@showRegistrationForm');
	Route::post('register', 'Auth\AuthController@register');
	Route::get('user', 'usercontroller@index');
	Route::get('user/tambah', 'usercontroller@tambah');
	Route::get('user/{id}/detail', 'usercontroller@detail');
	Route::get('user/{id}/hapus', 'usercontroller@hapus');
	
//pegawai
Route::get('pegawai', 'pegawaicontroller@index');
Route::get('pegawai/tambah', 'pegawaicontroller@tambah');
Route::get('pegawai/{id}/show', 'pegawaicontroller@detail');
Route::get('pegawai/{id}/edit', 'pegawaicontroller@edit');
Route::get('pegawai/{id}/hapus', 'pegawaicontroller@hapus');
Route::post('pegawai', 'pegawaicontroller@save');
Route::post('pegawai/{id}/update', 'pegawaicontroller@update');
Route::get('pegawai/cetak',['as' =>'admin.pegawai.cetak', 'uses'  => 'pegawaicontroller@getPdf']);

//desa
Route::get('desa', 'desacontroller@index');
Route::get('desa/{id}/detail', 'desacontroller@detail');
Route::get('desa/{id}/edit', 'desacontroller@edit');
Route::post('desa/{id}/update', 'desacontroller@update');
Route::get('desa/cetak',['as' =>'desa.cetak', 'uses'  => 'desacontroller@getPdf']);



//info
Route::get('info', 'infocontroller@index');
Route::get('info/tambah', 'infocontroller@tambah');
Route::get('info/{id}/show', 'infocontroller@detail');
Route::get('info/{id}/hapus', 'infocontroller@hapus');
Route::post('info', 'infocontroller@save');
//dokumen
Route::get('domisili', 'pagecontroller@domisili');
Route::post('domisili', 'mascontroller@save');
Route::get('/usaha', 'pagecontroller@usaha');
Route::post('usaha', 'mascontroller@simpan');
Route::get('/ktp', 'ktpcontroller@tambah');
Route::post('ktp', 'ktpcontroller@simpan');
Route::get('/dsusaha', 'dscontroller@tambah');
Route::post('/dsusaha', 'dscontroller@simpan');
Route::get('domisili/{id}/cetak','mascontroller@getPdf');
Route::get('usaha/{id}/cetak','mascontroller@cetak');
Route::get('ktp/{id}/cetak','ktpcontroller@cetak');
Route::get('/dsusaha/{id}/cetak', 'dscontroller@getPdf');
Route::get('/do', 'mascontroller@dsdoc');
Route::get('do/{id}/hapus', 'mascontroller@hapus');
Route::get('/us', 'mascontroller@usdoc');
Route::get('us/{id}/del', 'mascontroller@del');
Route::get('/ktpdoc', 'ktpcontroller@ktpdoc');
Route::get('ktpdoc/{id}/hapus', 'ktpcontroller@hapus');
Route::get('/dsudoc', 'dscontroller@dsudoc');
Route::get('dsudoc/{id}/hapus', 'dscontroller@hapus');