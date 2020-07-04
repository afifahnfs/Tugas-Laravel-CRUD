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

Route::get('/welcome', function () {
    return view('welcome1');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/home', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::post('/welcome1', 'AuthController@welcome1_post');
Route::get('/master', function(){
    return view('adminlte.master');
});
Route::get('/', function(){
    return view('content.tabel');
});
Route::get('/data-tables', function(){
    return view('content.data_tabel');
});
Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan semua data
Route::get('/pertanyaan/create', 'PertanyaanController@create'); //menampilkan halaman form
Route::post('/pertanyaan', 'PertanyaanController@store'); //menambahkan/menyimpan data
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); //menampilkan detail data per id
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); //menampilkan form untuk edit data
Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); //mengedit dan menyimpan perubahan edit data per id
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); //menghapus data id

Route::get('/jawaban', 'JawabanController@index');
Route::get('/jawaban/create', 'JawabanController@create');
Route::post('/jawaban', 'JawabanController@store');
Route::get('/jawaban/{id}', 'JawabanController@show');
Route::get('/jawaban/{id}/edit', 'JawabanController@edit');
Route::put('/jawaban/{id}', 'JawabanController@update');
Route::delete('/jawaban/{id}', 'JawabanController@destroy');