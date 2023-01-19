<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Setting;

class WebHomeController extends Controller
{
    public function index() {        
        $slider = Slider::select('id', 'image', 'title', 'description', 'url', 'status')->get();
        return view('index', compact('slider'));
    }
}
