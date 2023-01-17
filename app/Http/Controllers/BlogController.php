<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogRelated;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $record = cache()->remember('blogs-listing', 60 * 60, function(){
            return Blog::select('id','name','short_description','slug','blog_image','created_at')
                ->where('status',1)->orderBy('blogs.id','DESC')
                ->simplePaginate(15);
        });

        if($record != false){
            return view('blogs', compact('record') );
        }else{
            abort(404);
        }
    }

    public function blog_detail($slug){
        $blog = Blog::whereSlug($slug)
                ->with('meta:blog_id,meta_keywords,meta_description')
                ->first();

        if($blog != false){
            $related_blog_ids = BlogRelated::where('blog_id', $blog->id)
            ->pluck('related_blog_id')->toArray();

            $related_blogs = Blog::select('title','slug','blog_image')
                ->where('status', 1)->whereIn('id', $related_blog_ids)->get();

            $other_blogs = Blog::select('id', 'title','slug','blog_image')
                ->where('status', 1)
                ->whereNotIn('id', [$blog->id])
                ->inRandomOrder()
                ->limit(3)
                ->get();

            return view('blog_details', compact('blog', 'related_blogs', 'other_blogs') );
        }else{
            abort(404);
        }

    }
}
