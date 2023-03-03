<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogRelated;
use App\Models\BlogMetas;
use App\Models\Tag;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $record = Blog::select(
            'id',
            'name',
            'reading_time',
            'views',
            'slug',
            'blog_image',
            'created_at'
        )
            ->with('tags:id,name')
            ->where('status', 1)
            ->where('is_coupon_site', 1)
            //->skip(5)
//            ->take(6)
            ->orderBy('id', 'DESC')
            ->paginate(6);
            //->get();

        $latest = Blog::select(
            'id',
            'name',
            'short_description',
            'slug',
            'blog_image'
        )
            ->where('is_coupon_site', 1)
            ->take(5)
            ->orderBy('id', 'DESC')
            ->get();

        if ($record != false) {
            return view('blogs', compact('record', 'latest'));
        } else {
            abort(404);
        }
    }

    public function blog_detail($slug)
    {
        $blog = Blog::whereSlug($slug)
            ->withCount('comments')
            ->with('meta:blog_id,meta_keywords,meta_description')
            ->with('tags:id,name', 'comments:id,blog_id,name,email,description,created_at')
            ->first();

        if ($blog == false) {
            abort(404);
        }

        Blog::find($blog->id)->increment('views');

        if ($blog != false) {
            $related_blog_ids = BlogRelated::where('blog_id', $blog->id)
                ->pluck('related_blog_id')
                ->toArray();

            $related_blogs = Blog::select(
                'name',
                'slug',
                'blog_image',
                'created_at'
            )
                ->where('status', 1)
                ->whereIn('id', $related_blog_ids)
                ->get();

            $latest = Blog::select(
                'name',
                'slug',
                'blog_image',
                'created_at',
                'reading_time'
            )
                ->where('is_coupon_site', 1)
                ->take(4)
                ->whereNotIn('id', [$blog->id])
                ->orderBy('id', 'DESC')
                ->get();

            return view('blog_details', compact('blog', 'related_blogs', 'latest'));
        } else {
            abort(404);
        }
    }
}
