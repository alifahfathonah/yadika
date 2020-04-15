<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pendaftaran;
use Auth;

class CalonMuridController extends Controller
{
    // index
    public function index()
    {
        if (auth::check()) {
            if (auth::user()->auth == '1') {
                $new_murid = pendaftaran::orderBy('id','DESC')->get();

                $siswa = pendaftaran::where('jenis_kelamin','Laki-laki')->count();
                $siswi = pendaftaran::where('jenis_kelamin','Perempuan')->count();
                $sudah = pendaftaran::where('status','Sudah')->count();
                $belum = pendaftaran::where('status','Belum')->count();
                return view('backend.pendaftaran.index', compact('new_murid','siswa','siswi','sudah','belum'));
            }
        }
    }

    // Validasi Pendaftaran
    public function validasi(Request $request)
    {
        if (auth::check()) {
            if (auth::user()->auth == '1') {
                $validasi = pendaftaran::find($request->id);
                $validasi->update([
                    'status' => 'Sudah'
                ]);
                return $validasi;
            }
        }
    }
}
