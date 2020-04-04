<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // TKJ
    public function tkj()
    {
        return view('frontend.pages.jurusan.tkj');
    }

    // TKR
    public function tkr()
    {
        return view('frontend.pages.jurusan.tkr');
    }

    // AP
    public function ap()
    {
        return view('frontend.pages.jurusan.ap');
    }

    // AK
    public function ak()
    {
        return view('frontend.pages.jurusan.ak');
    }
}
