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
// menampilkan jawaban dari pertanyaan dengan id tertentu
Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
// menyimpan jawaban baru untuk pertanyaan dengan id tertentu
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');
