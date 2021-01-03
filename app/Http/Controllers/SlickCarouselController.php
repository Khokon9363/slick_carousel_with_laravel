<?php

namespace App\Http\Controllers;

use App\SlickCarousel;
use Illuminate\Http\Request;

class SlickCarouselController extends Controller
{
    public function slickCarousel()
    {
        $slicks = SlickCarousel::all();
        return view('welcome',compact('slicks'));
    }
}