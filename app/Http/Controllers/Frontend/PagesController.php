<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;

class PagesController extends Controller
{
    // TKJ
    public function tkj()
    {
        $cek = page::Where('pages','tkj')->first();
        $isi = page::Where('pages','tkj')->get();

        return view('frontend.pages.jurusan.tkj', compact('isi','cek'));
    }

    // TKR
    public function tkr()
    {
        $cek = page::Where('pages','tkr')->first();
        $isi = page::Where('pages','tkr')->get();

        return view('frontend.pages.jurusan.tkr', compact('isi','cek'));
    }

    // AP
    public function ap()
    {
        $cek = page::Where('pages','ap')->first();
        $isi = page::Where('pages','ap')->get();

        return view('frontend.pages.jurusan.ap', compact('isi','cek'));
    }

    // AK
    public function ak()
    {
        $cek = page::Where('pages','ak')->first();
        $isi = page::Where('pages','ak')->get();

        return view('frontend.pages.jurusan.ak', compact('isi','cek'));
    }

    // Sejarah Yadika
    public function sejarah()
    {
        $cek = page::Where('pages','history')->first();
        $isi = page::Where('pages','history')->get();

        return view('frontend.pages.about.sejarah_yadika', compact('isi','cek'));
    }

    // Kepala Sekolah
    public function kepala_sekolah()
    {
        $cek = page::Where('pages','head')->first();
        $isi = page::Where('pages','head')->get();

        return view('frontend.pages.about.kepala_sekolah', compact('isi','cek'));
    }

    // Visi dan Misi
    public function visi_misi()
    {
        $cek = page::Where('pages','visi_misi')->first();
        $isi = page::Where('pages','visi_misi')->get();

        return view('frontend.pages.about.visi_misi', compact('isi','cek'));
    }
}
