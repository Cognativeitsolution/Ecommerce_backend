<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebHomeController;
use App\Jobs\ResendEmailVerificationNotice;
use App\Http\Controllers\WebAboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\WebServiceController;
use App\Http\Requests\EmailVerificationRequest;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\ContactusCotroller;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\CouponController;

use App\Http\Controllers\JobController as WebJobController;
use App\Http\Controllers\BlogController as WebBlogController;
use App\Http\Controllers\PagesController as WebPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('clear_cache', function () {

    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');

    return "Cleared";

});

// Verify Email
Route::get('/verify-email/{code}', function ($code) {
    
    $user = User::where('year', $code)->first();
    
    if( !$user ){
        abort(404);
    }
    
    $user->update([
        'email_verified_at' => now(),
        'year' => NULL
        ]);

    $message = 'Your email has been verified';

    $status = 'success';

    return redirect()->route('web.home')->with('message', $message)->with('status', $status);
});

Route::get('/', [WebHomeController::class, 'index'])->name('web.home');
Route::get('/contact_us', [ContactController::class, 'index']);
Route::post('/contact_us', [ContactController::class, 'contact_us']);
Route::get('/about_us', [WebAboutController::class, 'index']);
Route::get('/blogs', [WebBlogController::class, 'index']);
Route::get('/blogs/{slug}', [WebBlogController::class, 'blog_detail']);
Route::get('/jobs', [WebJobController::class, 'index'])->name('web.jobs');
Route::get('/services', [WebServiceController::class, 'index']);
Route::get('/jobs/{slug}', [WebJobController::class, 'job_detail']);
Route::get('/pages/{slug}', [WebPagesController::class, 'page_detail'])->name('web.page_detail');
Route::get('/service/{slug}', [WebServiceController::class, 'service_detail'])->name('web.service_detail');

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
    Route::resource('admin/settings', SettingController::class);
    Route::resource('admin/pages', PageController::class);
    Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/admins', AdminsController::class);

});

Route::middleware([IsUser::class])->group(function(){
    Route::get('/home', [WebHomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/apply_job', [WebJobController::class, 'apply_job']);
    Route::post('/success_apply_job', [WebJobController::class, 'success_apply_job'])->name('success_apply_job');
    Route::get('/thank_you', [WebJobController::class, 'thank_you'])->name('thank_you');
    Route::resource('admin/roles', RoleController::class);
});

Route::get('/google', [RegisterController::class, 'google']);
Route::get('/google/redirect', [RegisterController::class, 'googleRedirect']);

Route::get('/facebook', [RegisterController::class, 'facebook']);
Route::get('/facebook/redirect', [RegisterController::class, 'facebookRedirect']);

Route::get('/linkedin', [RegisterController::class, 'linkedin']);
Route::get('/linkedin/redirect', [RegisterController::class, 'linkedinRedirect']);

// Perform email verification
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    $message = 'Your email has been verified';

    $status = 'success';

    return redirect()->route('web.home')->with('message', $message)->with('status', $status);
})->middleware(['signed'])->name('verification.verify');

// Resend verification email on user request
Route::post('/email/verification-notification', function (Request $request) {
    $user = User::find($request->user_id);

    if (!empty($user)) {
        // dispatch(new ResendEmailVerificationNotice($user));

        $code = rand(1000000,9999999);
        
        $user->update(['year' => $code ]);
        $data = [
            'user_name'  => $user["name"],
            'code'  => $code
            ];
        
        Mail::send('emails.myTestMail', $data, function($message) use ($user) {
            $message->to($user["email"] , $user["name"])
            ->subject('Cognitive IT Solutions - Verify Email Address');
        });

        $message = 'Verification link sent!';
        
        $status = 'success';
    } else {
        $message = 'Something went wrong!';
        
        $status = 'danger';
    }

    return back()->with('message', $message)->with('status', $status);
    
})->middleware('guest')->name('verification.send');


