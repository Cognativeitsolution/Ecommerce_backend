<?php

use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebHomeController;
use App\Http\Controllers\WebAboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactusCotroller;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\JobController as WebJobController;
use App\Http\Controllers\BlogController as WebBlogController;
use App\Http\Controllers\PagesController as WebPagesController;
use App\Http\Controllers\WebStoresController;

Route::get('clear_cache', function () {

    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');

    return "Cleared";

});

Route::get('/', [WebHomeController::class, 'index'])->name('web.home');
Route::get('/stores', [WebStoresController::class, 'index']);
Route::get('/contact_us', [ContactController::class, 'index']);
Route::post('/contact_us', [ContactController::class, 'contact_us']);
Route::get('/about_us', [WebAboutController::class, 'index']);
Route::get('/blogs', [WebBlogController::class, 'index']);
Route::get('/blogs/{slug}', [WebBlogController::class, 'blog_detail']);
Route::get('/pages/{slug}', [WebPagesController::class, 'page_detail'])->name('web.page_detail');
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
    Route::resource('admin/blogs', BlogController::class);
    Route::resource('admin/settings', SettingController::class);
    Route::resource('admin/pages', PageController::class);
    Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/admins', AdminsController::class);
});

Route::middleware([IsUser::class])->group(function(){
    Route::get('/home', [WebHomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/thank_you', [WebJobController::class, 'thank_you'])->name('thank_you');
    Route::resource('admin/roles', RoleController::class);
});