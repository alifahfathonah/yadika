<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\slider;

class FrontendController extends Controller
{
    // Welcome
    public function welcome()
    {
        $slider = slider::where('status','Aktif')->get();
        $sliders = slider::where('status','Aktif')->first();
        
        return view('frontend.index', compact('slider','sliders'));
    }
}
