<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BuyTicketController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['domain' => 'admin.' . env('DOMAIN')], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginProcess');
        Route::get('forgot-password', 'forgotPassword');
        Route::post('forgot-password', 'forgotPasswordProcess');
        Route::get('reset-password', 'resetPassword');
        Route::post('reset-password', 'resetPasswordProcess');
        Route::post('otp', 'otp');
        Route::get('logout', 'logout');
    });

    Route::middleware('auth:web')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/', 'dashboard');
            Route::get('dashboard', 'dashboard');
        });
    });
});

Route::get('/', [LandingController::class, 'index']);
Route::post('add-subscriber', [LandingController::class, 'addSubscriber']);

Route::controller(BuyTicketController::class)->group(function () {
    Route::get('buy-ticket', 'index');
    Route::post('buy-ticket', 'buyTicket');
});

Route::get('gallery', [GalleryController::class, 'index']);
Route::controller(BlogController::class)->group(function () {
    Route::get('blogs', 'index');
    Route::get('blogs/read/{id}', 'detail');
    Route::post('comment', 'comment');
});
