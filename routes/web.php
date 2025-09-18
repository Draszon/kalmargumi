<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::get('/prices', [PriceController::class, 'index'])->name('prices');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutmeController::class, 'index'])->name('about');
Route::get('/getimage', [HomeController::class, 'getImage']);
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/getservices', [HomeController::class, 'getServices']);
Route::get('/getcomments', [HomeController::class, 'getComments']);
Route::get('/getopenings', [HomeController::class, 'getOpenings']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::delete('/delete-comment/{id}', [CommentController::class, 'deleteComment'])->name('comment.delete');
    Route::delete('/image-delete/{id}', [GaleryController::class, 'deleteImage'])->name('image.delete');
    Route::post('/image-store', [GaleryController::class, 'storeImage'])->name('image.store');
    Route::get('/dashboard', [GaleryController::class, 'getAllData'])->name('dashboard');
    Route::view('/servicesedit', 'servicesedit')->name('services.edit');
    Route::view('/pricesedit', 'pricesedit')->name('pricesedit.edit');
    Route::view('/aboutmeedit', 'aboutmeedit')->name('aboutmeedit.edit');
    Route::view('/contactedit', 'contactedit')->name('contactedit.edit');
    Route::view('/aboutmeedit', 'aboutmeedit')->name('aboutmeedit.edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
