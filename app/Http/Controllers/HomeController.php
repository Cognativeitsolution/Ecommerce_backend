<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user_welcome');
    }

    public function adminHome(){

        $users_count = User::where('is_admin', 0)->count();
        $blogs_count = Blog::count();
        $sliders_count = Slider::count();
        $pages_count = Page::where('parent_id', '!=', 0)->count();

        return view('home', compact(
            'users_count',
            'blogs_count',
            'sliders_count',
            'pages_count'
        ));

    }
}
