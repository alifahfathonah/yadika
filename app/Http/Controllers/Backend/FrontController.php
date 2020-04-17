<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\front;
use auth;

class FrontController extends Controller
{
    // Info
    public function info()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $isi = front::where('kat','info')->get();
                return view('backend.front.info', compact('isi'));
            }
        }
    }

    // Mading
    public function mading()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $isi = front::where('kat','mading')->get();
                return view('backend.front.mading', compact('isi'));
            }
        }
    }

    // About
    public function about()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $cek = front::where('kat','about')->first();
                $isi = front::where('kat','about')->get();
                return view('backend.front.about', compact('isi','cek'));
            }
        }
    }

    // Proses
    public function proses_front(Request $request)
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $front = front::Create([
                    'isi' => $request->isi,
                    'kat' => $request->kat,
                    'info' => $request->info,
                ]);

                return redirect()->back();
            }
        }
    }

    // Edit
    public function edit_front($id)
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $edit = front::findOrFail($id);
                return view('backend.front.edit', compact('edit'));
            }
        }
    }

    // Update
    public function update_front(Request $request, $id)
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $update = front::findOrFail($id);
                $update->isi = $request->isi;
                $update->kat = $request->kat;
                $update->info = $request->info;
                $update->save();
                
                if ($update->kat == 'info') {
                    return redirect('front-info');
                } elseif($update->kat == 'mading') {
                    return redirect('front-mading');
                } elseif($update->kat == 'about') {
                    return redirect('front-about');
                }
                
                return view('backend.front.edit', compact('edit'));
            }
        }
    }
}
