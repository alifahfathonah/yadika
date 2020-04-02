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
// Frontend
Route::get('/','Frontend\FrontendController@welcome');
Route::get('/pendaftaran-online','Frontend\PendaftaranController@index');
Route::post('/pendaftaran-online','Frontend\PendaftaranController@store');
Route::get('sukses-daftar','Frontend\PendaftaranController@suksesdaftar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Backend
Route::resource('/pengguna','Backend\PenggunaController');
Route::get('calon-murid','Backend\CalonMuridController@index');
Route::get('validasi-pendaftaran','Backend\CalonMuridController@validasi');
