<?php

use Illuminate\Http\Request;

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

Route::get('/pasien', 'PasienController@index');

Route::get('/pasien/tambah', 'PasienController@tambahPasien');

Route::post('/pasien/store', 'PasienController@store');

Route::get('/pasien/delete/{id}', 'PasienController@delete');

Route::get('/pasien/edit/{id}', 'PasienController@editPasien');

Route::post('/pasien/update', 'PasienController@updatePasien');