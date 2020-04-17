<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;
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
        } else {
            return redirect('home');
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
        } else {
            return redirect('home');
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
        } else {
            return redirect('home');
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
        } else {
            return redirect('home');
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
        } else {
            return redirect('home');
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
        } else {
            return redirect('home');
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
        } else {
            return redirect('home');
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
        } else {
            return redirect('home');
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
        } else {
            return redirect('home');
        }
    }

    // Edit Pages
    public function page_edit($id)
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $edit = page::findOrFail($id);
                return view('backend.pages.jurusan.edit', compact('edit'));
            }
        } else {
            return redirect('home');
        }
    }

    // Update Pages
    public function page_update(Request $request, $id)
    {
        if (auth::check()) {
            if (auth::user()->auth == 1) {
                $update = page::findOrFail($id);
                $update->id = $request->id;
                $update->isi = $request->isi;
                $update->pages = $request->pages;
                $update->save();
    
                if ($update->pages == 'tkj') {
                    return redirect('pages-tkj');
                } elseif ($update->pages == 'tkr') {
                    return redirect('pages-tkr');
                } elseif ($update->pages == 'ap') {
                    return redirect('pages-ap');
                } elseif ($update->pages == 'ak') {
                    return redirect('pages-ak');
                } elseif ($update->pages == 'ro') {
                    return redirect('pages-ro');
                } elseif ($update->pages == 'history') {
                    return redirect('pages-history');
                } elseif ($update->pages == 'head') {
                    return redirect('pages-kepala-sekolah');
                } elseif ($update->pages == 'visi_misi') {
                    return redirect('pages-visi-dan-misi');
                }
            } else {
                return redirect('home');
            }
        }
    }
}
