<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Store;
use App\Models\Coupon;
use App\Models\Blog;
use DB;

class WebHomeController extends Controller
{
    public function index()
    {
        $slider = Slider::select('id', 'image', 'title', 'description', 'status')
            ->where('status', 1)
            ->where('is_coupon', 0)
            ->get();

        $main_blog_with_category = DB::table('blogs as blog')
            ->join('blogs as category', 'category.id', '=', 'blog.parent_id')
            ->select(
                'blog.id',
                'blog.name',
                'blog.parent_id',
                'blog.name',
                'blog.slug',
                'blog.blog_image',
                'blog.long_description',
                'blog.views',
                'blog.created_at',
                'category.id as category_id',
                'category.name as category_name'
            )
            ->where('blog.status', 1)
            ->where('blog.is_coupon_site', 0)
            ->inRandomOrder()
            ->take(4)
            ->get();

        $latest_blog_with_category = DB::table('blogs as blog')
            ->join('blogs as category', 'category.id', '=', 'blog.parent_id')
            ->select(
                'blog.*',
                'category.id as category_id',
                'category.name as category_name'
            )
            ->where('blog.status', 1)
            ->where('blog.is_coupon_site', 0)
            ->orderBy('blog.id', 'DESC')
            ->take(4)
            ->get();

//                        dd( $latest_blog_with_category->toArray() );

        return view('index', compact('slider', 'latest_blog_with_category', 'main_blog_with_category'));
    }

    public function blog_details($slug)
    {
        $blog = DB::table('blogs as blog')
            ->join('blogs as category', 'category.id', '=', 'blog.parent_id')
            ->select(
                'blog.*',
                'category.id as category_id',
                'category.name as category_name'
            )
            ->where('blog.slug', $slug)
            ->first();

        if (!$blog) {
            return redirect()->route('web.home');
        }

        Blog::find($blog->id)->increment('views');

        $latest_blog_with_category = DB::table('blogs as blog')
            ->join('blogs as category', 'category.id', '=', 'blog.parent_id')
            ->select(
                'blog.*',
                'category.id as category_id',
                'category.name as category_name'
            )
            ->where('blog.status', 1)
            ->where('blog.is_coupon_site', 0)
            ->orderBy('blog.id', 'DESC')
            ->take(4)
            ->get();


        //    dd($latest_blog_with_category);
        return view('blog_detail', compact('blog', 'latest_blog_with_category'));
    }

    public function blog_category($slug)
    {
        $category = Blog::select('id', 'name')->where('slug', $slug)->first();

        if ($category) {
            $blogs = Blog::select('id', 'name', 'blog_image', 'slug')->where('parent_id', $category->id)->where('is_coupon_site', 0)->get();

            return view('blog_category', compact('category', 'blogs'));
        }

        return redirect()->route('web.home');
    }
}
