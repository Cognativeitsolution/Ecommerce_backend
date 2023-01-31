<?php

namespace App\Providers;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Store;
use App\Models\Comment;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $settings = Setting::first();
        $footer_pages = Page::select('id','parent_id','name','slug')->where('parent_id', '!=', 0)->where('status',1)->get();
        $popular_stores = Store::where('popular', 1)->select('id','name','slug')->take(4)->inRandomOrder()->get();
        $top_stores_footer = Store::where('top', 1)->select('id','name','slug')->withCount('coupon')->take(3)->inRandomOrder()->get();
        $new_comments = Comment::where('new_comment', 1)->count();

        View::share('settings', $settings);
        View::share('footer_pages', $footer_pages);
        View::share('popular_stores', $popular_stores);
        View::share('top_stores_footer', $top_stores_footer);
        View::share('new_comments', $new_comments);
    }
}
