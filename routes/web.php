<?php

use Illuminate\Support\Facades\Route;

/** Frontend Controllers */
use App\Http\Controllers\frontend\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin-login', function () {
    return view('pages.frontend.login.index');
});

// Add contact route
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('frontend.contact');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('frontend.about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('frontend.gallery');
Route::get('/music-tracks', [HomeController::class, 'musicTracks'])->name('frontend.musictracks');
Route::get('/music-videos', [HomeController::class, 'musicVideos'])->name('frontend.musicvideos');
