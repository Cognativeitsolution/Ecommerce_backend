<?php

use Illuminate\Http\Request;
use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebHomeController;
use App\Http\Controllers\WebAboutController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\WebStoresController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\CouponController;
// use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\WebSubscriberController;
use App\Http\Controllers\Admin\ContactusCotroller;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\UploadImageController;
use App\Http\Controllers\BlogController as WebBlogController;
use App\Http\Controllers\PagesController as WebPagesController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\WebCommentController;
use App\Http\Controllers\WebCouponController;

Route::get('clear_cache', function () {

    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');

    return "Cleared";

});

Route::get('/', [WebHomeController::class, 'index'])->name('web.home');
Route::get('/coupon', [WebCouponController::class, 'index'])->name('web.coupon');
Route::get('/stores', [WebStoresController::class, 'index']);
Route::get('/categories', [WebStoresController::class, 'categories']);
Route::get('/stores/action', [WebStoresController::class, 'action'])->name('stores.action');
Route::get('/stores/views', [WebStoresController::class, 'views'])->name('stores.views');
Route::get('/stores/{slug}', [WebStoresController::class, 'stores_slug'])->name('stores.store_slug');
Route::get('/contact_us', [ContactController::class, 'index']);
Route::post('/contact_us', [ContactController::class, 'contact_us']);
Route::get('/blogs', [WebBlogController::class, 'index']);
Route::get('/blogs/{slug}', [WebBlogController::class, 'blog_detail']);
Route::get('/pages/{slug}', [WebPagesController::class, 'page_detail'])->name('web.page_detail');
Route::post('/store_comments', [WebCommentController::class, 'store_comments'])->name('web.store_comments');
Route::post('/subscribers/store', [WebSubscriberController::class, 'store']);
Auth::routes();

Route::middleware([IsAdmin::class])->group(function(){
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('admin/users', UserController::class);
    Route::get('admin/contact_us/{id}', [ContactusCotroller::class, 'show'])->name('contactus.show');
    Route::get('admin/contact_us', [ContactusCotroller::class, 'index'])->name('contactus.home'); 
    Route::delete('admin/contact_us/{id}', [ContactusCotroller::class, 'destroy'])->name('contactus.destroy');
    Route::post('admin/contact_us/multi_delete', [ContactusCotroller::class, 'multi_delete'])->name('contactus.multi_delete');
    Route::resource('admin/sliders', SliderController::class);
    Route::resource('admin/stores', StoreController::class);
    Route::resource('admin/coupons', CouponController::class);
    Route::resource('admin/blogs', BlogController::class);
    Route::resource('admin/comments', CommentController::class);
    Route::post('admin/old_comment/{id}', [CommentController::class, 'old_comment'])->name('old_comment');
    Route::post('admin/comments/multi_delete', [CommentController::class, 'multi_delete'])->name('comments.multi_delete');

    // old_comment
    Route::resource('admin/settings', SettingController::class);
    Route::resource('admin/pages', PageController::class);
    // Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/admins', AdminsController::class);
    Route::resource('admin/tags', TagController::class);
    Route::resource('admin/subscribers', SubscriberController::class);
    Route::post('admin/subscribers/multi_delete', [SubscriberController::class, 'multi_delete'])->name('subscribers.multi_delete');
});

Route::post('upload_image', [UploadImageController::class, 'upload']);

Route::middleware([IsUser::class])->group(function(){
    Route::get('/home', [WebHomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('admin/roles', RoleController::class);
});