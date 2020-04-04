<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\page;
use auth;

class PagesController extends Controller
{
    // TKJ
    public function tkj()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = page::where('pages','tkj')->first();

                $isi = page::where('pages','tkj')->get();
                return view('backend.pages.jurusan.tkj', compact('cek','isi'));
            }
        }
    }

    // TKR
    public function tkr()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = page::where('pages','tkr')->first();

                $isi = page::where('pages','tkr')->get();
                return view('backend.pages.jurusan.tkr', compact('cek','isi'));
            }
        }
    }

    // AP
    public function ap()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = page::where('pages','ap')->first();

                $isi = page::where('pages','ap')->get();
                return view('backend.pages.jurusan.ap', compact('cek','isi'));
            }
        }
    }

    // AK
    public function ak()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = page::where('pages','ak')->first();

                $isi = page::where('pages','ak')->get();
                return view('backend.pages.jurusan.ak', compact('cek','isi'));
            }
        }
    }

    // REGISTRASI ONLINE
    public function ro()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = page::where('pages','ro')->first();

                $isi = page::where('pages','ro')->get();
                return view('backend.pages.informasi.regis_online', compact('cek','isi'));
            }
        }
    }

    // SEJARAH YADIKA
    public function history()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = page::where('pages','history')->first();

                $isi = page::where('pages','history')->get();
                return view('backend.pages.about.history', compact('cek','isi'));
            }
        }
    }

    // KEPALA SEKOLAH
    public function kepala_sekolah()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = page::where('pages','head')->first();

                $isi = page::where('pages','head')->get();
                return view('backend.pages.about.head', compact('cek','isi'));
            }
        }
    }

    // VISI dan MISI
    public function visi_misi()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = page::where('pages','visi_misi')->first();

                $isi = page::where('pages','visi_misi')->get();
                return view('backend.pages.about.visi_misi', compact('cek','isi'));
            }
        }
    }

    // Pages Store
    public function page_store(Request $request)
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $page = page::create([
                    'isi' => $request->isi,
                    'pages' => $request->pages
                ]);

                return redirect()->back();
            }
        }
    }
}
