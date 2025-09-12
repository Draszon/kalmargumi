<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/prices', 'prices')->name('prices');
Route::view('/contact', 'contact')->name('contact');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutmeController::class, 'index'])->name('about');
Route::get('/getimage', [HomeController::class, 'getImage']);
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/getservices', [HomeController::class, 'getServices']);
Route::get('/getcomments', [HomeController::class, 'getComments']);
Route::get('/getopenings', [HomeController::class, 'getOpenings']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
