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

        // Berita / Artikel
        Route::get('berita/{slug}','Frontend\FrontendController@show_berita');

Auth::routes([
    'register' => false,
]);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
    });

Route::get('/home', 'HomeController@index')->name('home');

// Backend
    Route::resource('/pengguna','Backend\PenggunaController');
    Route::get('calon-murid','Backend\CalonMuridController@index');
    Route::get('validasi-pendaftaran','Backend\CalonMuridController@validasi');

    // Pengaturan
    Route::get('pengaturan-slider','Backend\PengaturanController@slider');
    Route::post('pengaturan-slider','Backend\PengaturanController@prosesSlider');
    Route::get('pengaturan-status','Backend\PengaturanController@status');
    Route::post('pengaturan-status','Backend\PengaturanController@status_proses');

    // Pages
        // Jurusan
        Route::get('pages-tkj','Backend\PagesController@tkj');
        Route::get('pages-tkr','Backend\PagesController@tkr');
        Route::get('pages-ap','Backend\PagesController@ap');
        Route::get('pages-ak','Backend\PagesController@ak');
        
        Route::get('pages-edit/{id}','Backend\PagesController@page_edit');
        Route::put('pages-update/{id}','Backend\PagesController@page_update');

        // Informasi
        Route::get('pages-ro','Backend\PagesController@ro');

        // About
        Route::get('pages-history','Backend\PagesController@history');
        Route::get('pages-kepala-sekolah','Backend\PagesController@kepala_sekolah');
        Route::get('pages-visi-dan-misi','Backend\PagesController@visi_misi');
        Route::post('page-store','Backend\PagesController@page_store');

    // Artikel
    Route::resource('artikel','Backend\ArtikelController');

    // Front
        Route::get('front-info','Backend\FrontController@info');
        Route::get('front-mading','Backend\FrontController@mading');
        Route::get('front-about','Backend\FrontController@about');
        Route::post('front-store','Backend\FrontController@proses_front');
        Route::get('front-edit/{id}','Backend\FrontController@edit_front');
        Route::put('front-update/{id}','Backend\FrontController@update_front');

    // Notification
        Route::get('murid-baru-notification','Backend\CalonMuridController@notif');

        
