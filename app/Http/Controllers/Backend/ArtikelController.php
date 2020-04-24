<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\artikel;
use Auth;

class ArtikelController extends Controller
{

    public function index()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $artikel = artikel::all();
                return view('backend.artikel.index', compact('artikel'));
            }
        }
    }


    public function create()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                return view('backend.artikel.create');
            }
        }
    }

    public function store(Request $request)
    {
        $foto = $request->file('thumbail');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'thumbail';
        $foto->move($tujuan_upload,$nama_foto);

        $slug = \Str::slug($request->title) . "-" . \Str::random(6);

        $artikel = new artikel;
        $artikel->user_id = auth::user()->id;
        $artikel->title = $request->title;
        $artikel->isi = $request->isi;
        $artikel->isi_preview = $request->isi_preview;
        $artikel->slug = $slug;
        $artikel->thumbail = $nama_foto;
        $artikel->kategori = $request->kategori;
        $artikel->status = $request->status;
        $artikel->save();

        return redirect()->route('artikel.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
