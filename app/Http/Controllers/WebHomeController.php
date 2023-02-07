<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Store;
use App\Models\Coupon;
use App\Models\Blog;
use DB;

class WebHomeController extends Controller
{
    public function index() {        
        $slider = Slider::select('id', 'image', 'title', 'description', 'status')
            ->where('status', 1)
            ->where('is_coupon', 0)
            ->get();

//        $latest_blogs = Blog::select(
//            'id',
//            'name',
//            'slug',
//            'parent_id'
//
//        )
//            ->limit(4)
//            ->orderBy('blogs.id', 'DESC')
//            ->get();

        $latest_blog_with_category = DB::table('blogs as blog')
            ->join('blogs as category','category.id','=','blog.parent_id')
            ->select(
                'blog.*',
                'category.id as category_id',
                'category.name as category_name'
            )
            ->where('blog.status', 1)
            ->orderBy('blog.id', 'DESC')
            ->take(4)
            ->get();


//        dd( $latest_blog_with_category->toArray() );


        return view('index', compact('slider','latest_blog_with_category'));
    }

    public function blog_details($slug){

//        dd($slug);
        return view('blog_detail');

    }

    public function blog_category($slug){

//        dd($slug);
        return view('blog_category');

    }

}
