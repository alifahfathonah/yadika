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

    // PAGES
        // Jurusan
        Route::get('teknik-komputer-&-jaringan','Frontend\PagesController@tkj');
        Route::get('teknik-otomotif','Frontend\PagesController@tkr');
        Route::get('administrasi-perkantoran','Frontend\PagesController@ap');
        Route::get('akuntansi','Frontend\PagesController@ak');

        // About
        Route::get('sejarah-yadika','Frontend\PagesController@sejarah');
        Route::get('kepala-sekolah','Frontend\PagesController@kepala_sekolah');
        Route::get('visi-dan-misi','Frontend\PagesController@visi_misi');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Backend
    Route::resource('/pengguna','Backend\PenggunaController');
    Route::get('calon-murid','Backend\CalonMuridController@index');
    Route::get('validasi-pendaftaran','Backend\CalonMuridController@validasi');

    // Pengaturan
    Route::get('pengaturan-slider','Backend\PengaturanController@slider');
    Route::post('pengaturan-slider','Backend\PengaturanController@prosesSlider');

    // Pages
        // Jurusan
        Route::get('pages-tkj','Backend\PagesController@tkj');
        Route::get('pages-tkr','Backend\PagesController@tkr');
        Route::get('pages-ap','Backend\PagesController@ap');
        Route::get('pages-ak','Backend\PagesController@ak');

        // Informasi
        Route::get('pages-ro','Backend\PagesController@ro');

        // About
        Route::get('pages-history','Backend\PagesController@history');
        Route::get('pages-kepala-sekolah','Backend\PagesController@kepala_sekolah');
        Route::get('pages-visi-dan-misi','Backend\PagesController@visi_misi');
        Route::post('page-store','Backend\PagesController@page_store');

    // Front
        Route::get('front-info','Backend\FrontController@info');
        Route::get('front-mading','Backend\FrontController@mading');
        Route::get('front-about','Backend\FrontController@about');
        Route::post('front-store','Backend\FrontController@proses_front');
