<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\slider;
use App\front;

class FrontendController extends Controller
{
    // Welcome
    public function welcome()
    {
        $slider = slider::where('status','Aktif')->get();
        $sliders = slider::where('status','Aktif')->first();
        
        $info = front::where("kat","info")->limit(2)->orderBy('id','desc')->get();
        $mading = front::where("kat","mading")->limit(3)->orderBy('id','desc')->get();
        $about = front::where("kat","about")->limit(3)->orderBy('id','desc')->get();
        
        $cek = front::where("kat","about")->limit(3)->orderBy('id','desc')->first();

        return view('frontend.index', compact('slider','sliders','info','mading','about','cek'));
    }
}
