<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OtherSettingController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\VideoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [AuthController::class, "index"])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('store');

Route::middleware(["admin"])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('setting', OtherSettingController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('certificate', CertificateController::class);
    Route::resource('contacts', ContactController::class);
    Route::get('/inquirys', [ContactController::class, 'inquiry'])->name('inquiry');

    Route::resource('teams', TeamController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('products', ProductController::class);
    Route::resource('pages', PageController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('gallery', GalleryController::class);
});
