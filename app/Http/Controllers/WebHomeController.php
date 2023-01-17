<?php

namespace App\Http\Controllers;

use App\Models\Slider;

class WebHomeController extends Controller
{
    public function index() {        
        $slider = Slider::get();
        return view('index', compact('slider'));
    }
}
