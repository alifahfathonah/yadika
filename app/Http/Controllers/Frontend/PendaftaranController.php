<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pendaftaran;

class PendaftaranController extends Controller
{
    // Form
    public function index()
    {
        return view('frontend.pendaftaran.index');
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
        $pendaftaran->jurusan = $request->jurusan;
        $pendaftaran->info = $request->info;
        $pendaftaran->save();
        
    }
}
