<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Setting;
use App\Models\Store;
use App\Models\Coupon;

class WebHomeController extends Controller
{
    public function index() {        
        $slider = Slider::select('id', 'image', 'title', 'description', 'url', 'status')->get();

        $top_stores = Store::where('type', 1)->where('top', 1)->where('status', 1)
            ->select(
                'id',
                'name',
                'slug',
                'image',
                'banner_image'
                )
            ->with('meta:store_id,meta_keywords,meta_description')
            ->orderBy('id','DESC')
            ->limit(8)
            ->get();

        $popular_categories = Store::where('type', 2)->where('popular', 1)->where('status', 1)
            ->select(
                'id',
                'name',
                'slug',
                'image'
            )
            ->withCount('coupon')
            ->orderBy('id','DESC')
            ->limit(7)
            ->get();

        $featured_offers = Coupon::where('featured', 1)
                ->where('latest', 0)
                ->take(4)
                ->inRandomOrder()
                ->get();

        $latest_offers = Coupon::where('latest', 1)
            ->where('featured', 0)
            ->take(4)
            ->inRandomOrder()
            ->get();

        return view('index', compact('slider', 'top_stores', 'popular_categories', 'featured_offers', 'latest_offers'));
    }
}
