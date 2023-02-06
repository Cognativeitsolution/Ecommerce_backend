<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Store;
use App\Models\Coupon;

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

        $blogs_count = Blog::count();
        $comments_count = Comment::count();
        $stores_count = Store::count();
        $coupons_count = Coupon::count();

        return view('home', compact(
            'blogs_count',
            'comments_count',
            'stores_count',
            'coupons_count'
        ));

    }
}
