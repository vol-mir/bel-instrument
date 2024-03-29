<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
    Route::get('/about-us', [HomeController::class, 'about'])->name('about');
    Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
    Route::get('/return-products', [HomeController::class, 'returnProducts'])->name('returnProducts');
    Route::get('/delivery', [HomeController::class, 'delivery'])->name('delivery');
});
