<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\front;
use App\Models\artikel;

class FrontendController extends Controller
{
    // Welcome
    public function welcome()
    {
        $slider = slider::where('status','Aktif')->where('kat','front')->get();
        $sliders = slider::where('status','Aktif')->where('kat','front')->first();
        
        $info = front::where("kat","info")->limit(2)->orderBy('id','desc')->get();
        $mading = front::where("kat","mading")->limit(3)->orderBy('id','desc')->get();
        $about = front::where("kat","about")->limit(3)->orderBy('id','desc')->get();
        $artikel = artikel::limit(4)->orderBy('id','desc')->get();
        
        $cek = front::where("kat","about")->limit(3)->orderBy('id','desc')->first();

        return view('frontend.index', compact('slider','sliders','info','mading','about','artikel','cek'));
    }

    // Show Berita
    public function show_berita($slug)
    {
        $show = artikel::where('slug',$slug)->first();
        $artikel = artikel::limit(4)->orderBy('id','desc')->get();
        return view('frontend.partials.berita.show', compact('show','artikel'));
    }
}
