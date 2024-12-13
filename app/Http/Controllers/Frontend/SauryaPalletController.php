<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;

class SauryaPalletController extends Controller
{
    //
    public function index()
    {
        $videos = Video::latest()->get();

        return view('frontend.sauryapallet.video', compact("videos"));
    }
    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        $tesimonials = Testimonial::latest()->get();

        return view('frontend.sauryapallet.gallery', compact("galleries", "tesimonials"));
    }

    public function supplierandpartner()
    {
        $suppilers = Partner::latest()->get();
        $tesimonials = Testimonial::latest()->get();

        return view('frontend.sauryapallet.supplierandpartner', compact("tesimonials", "suppilers"));
    }
}
