<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\status;
use Auth;

class PengaturanController extends Controller
{
    // Slider
    public function slider()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $slider = slider::all();
                return view('backend.pengaturan.slider', compact('slider'));
            }
        }
    }

    // Proses Slider
    public function prosesSlider(Request $request)
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {

                $gambar = $request->file('gambar');
                $gambar_slider = time()."_".$gambar->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'frontend/slider';
                $gambar->move($tujuan_upload,$gambar_slider);

                $slider = slider::create([
                    'title'     => $request->title,
                    'sub_title' => $request->sub_title,
                    'status'    => 'Aktif',
                    'kat'       => $request->kat,
                    'gambar'    => $gambar_slider,
                ]);

                return redirect()->back();
            }
        }
    }

    // Status Pages / URL
    public function status()
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $status = status::all();
                return view('backend.pengaturan.status', compact('status'));
            }
        }
    }

    // Proses Status Pages / URL
    public function status_proses(Request $request)
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                status::create([
                    'nama'      => $request->nama,
                    'status'    => $request->status
                ]);

                return back();
            }
        }
    }
}
