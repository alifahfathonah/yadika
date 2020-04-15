<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pendaftaran;
use App\Models\page;
use App\Models\artikel;

class PendaftaranController extends Controller
{
    // Form
    public function index()
    {
        $cek = page::where('pages','ro')->first();
        $isi = page::where('pages','ro')->get();
        $artikel = artikel::limit(4)->orderBy('id','desc')->get();
        
        return view('frontend.pages.informasi.pendaftaran_on', compact('isi','cek','artikel'));
    }

    // Proses
    public function store(Request $request)
    {
        $pendaftaran = new pendaftaran;
        $pendaftaran->nama = $request->nama;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tgl_lahir = $request->tgl_lahir;
        $pendaftaran->alamat = $request->alamat;
        $pendaftaran->asal_sekolah = $request->asal_sekolah;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->agama = $request->agama;
        $pendaftaran->nama_ayah = $request->nama_ayah;
        $pendaftaran->nama_ibu = $request->nama_ibu;
        $pendaftaran->pekerjaan_ibu = $request->pekerjaan_ibu;
        $pendaftaran->pekerjaan_ayah = $request->pekerjaan_ayah;
        $pendaftaran->no_hp = $request->no_hp;
        $pendaftaran->no_hp_ortu = $request->no_hp_ortu;
        $pendaftaran->email_murid = $request->email_murid;
        $pendaftaran->jurusan = $request->jurusan;
        $pendaftaran->info = $request->info;
        $pendaftaran->status = 'Belum';
        $pendaftaran->notif = 0;
        $pendaftaran->save();
        
        return redirect('sukses-daftar');
    }

    // Sukses Pendaftaran
    public function suksesdaftar()
    {
        $artikel = artikel::limit(4)->orderBy('id','desc')->get();
        return view('frontend.pages.informasi.sukses', compact('artikel'));
    }
}
