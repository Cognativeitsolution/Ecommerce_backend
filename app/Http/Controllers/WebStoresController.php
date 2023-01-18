<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebStoresController extends Controller
{
    public function index() {
        return view('stores');
    }
}
