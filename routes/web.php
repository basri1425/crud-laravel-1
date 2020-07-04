<?php

use Illuminate\Support\Facades\Route;

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
// menampilkan tabel berisi data pertanyaan-pertanyaan
Route::get('/pertanyaan','PertanyaanController@index');
// menampilkan form untuk membuat pertanyaan baru
Route::get('/pertanyaan/create','PertanyaanController@create');
// menyimpan data baru ke tabel pertanyaan
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/{pertanyaan}/edit','PertanyaanController@edit');
Route::patch('/pertanyaan/{pertanyaan}','PertanyaanController@update');
Route::delete('/pertanyaan/hapus/{id}','PertanyaanController@destroy');

// menampilkan jawaban dari pertanyaan dengan id tertentu (group id)
Route::get('/jawaban','JawabanController@index');

// menampilkan jawaban dari pertanyaan dengan id tertentu
Route::get('/jawaban/{pertanyaan_id}','JawabanController@show');
// menjawab dari pertanyaan dengan id tertentu
Route::get('/jawaban/create/{pertanyaan_id}','JawabanController@create');
Route::post('/jawaban','JawabanController@store');
// menyimpan jawaban baru untuk pertanyaan dengan id tertentu
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');

