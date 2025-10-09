<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\EditAboutController;
use App\Http\Controllers\Admin\editContactController;
use App\Http\Controllers\Admin\EditPriceController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\OpeningController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');

//publik oldalak, bárki számára megtekinthetőek
Route::get('/prices', [PriceController::class, 'index'])->name('prices');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutmeController::class, 'index'])->name('about');
Route::get('/getimage', [HomeController::class, 'getImage']);
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/getservices', [HomeController::class, 'getServices']);
Route::get('/getcomments', [HomeController::class, 'getComments']);
Route::get('/getopenings', [HomeController::class, 'getOpenings']);

//bejelentkezett felhasználók tekinthetik meg az oldalakat
Route::middleware(['auth', 'verified'])->group(function () {
    Route::delete('/about-photo-delete/{id}', [EditAboutController::class, 'aboutPhotosDelete'])->name('aboutPhoto.delete');
    Route::post('/about-photo-store', [EditAboutController::class, 'aboutPhotosStore'])->name('aboutPhoto.store');

    Route::put('/edit-category', [EditPriceController::class, 'editCategory'])->name('category.edit');
    Route::put('/add-category', [EditPriceController::class, 'storeCategory'])->name('category.store');
    Route::put('/store-service', [EditPriceController::class, 'storeService'])->name('service.store');
    Route::put('/update-service', [EditPriceController::class, 'editService'])->name('wheelService.edit');
    Route::delete('/delete-service', [EditPriceController::class, 'deleteService'])->name('service.delete');

    Route::delete('/delete-category', [EditPriceController::class, 'destroySelected'])->name('destroy.category');
    Route::put('/edit-aboutme/{id}', [EditAboutController::class, 'editAbout'])->name('aboutmes.edit');
    Route::put('/edit-services/{id}', [ServiceController::class, 'editService'])->name('service.edit');
    Route::put('/edit-contacts/{id}', [editContactController::class, 'editContact'])->name('contact.edit');
    Route::put('/edit-openings/{id}', [OpeningController::class, 'editOpening'])->name('opening.edit');
    Route::post('/store-comment', [CommentController::class, 'storeComment'])->name('comment.store');
    Route::delete('/delete-comment/{id}', [CommentController::class, 'deleteComment'])->name('comment.delete');
    Route::delete('/image-delete/{id}', [GaleryController::class, 'deleteImage'])->name('image.delete');
    Route::post('/image-store', [GaleryController::class, 'storeImage'])->name('image.store');
    Route::get('/dashboard', [GaleryController::class, 'getAllData'])->name('dashboard');

    Route::get('/servicesedit', [ServiceController::class, 'getServices'])->name('services.edit');
    Route::get('/aboutmeedit', [EditAboutController::class, 'getAbout'])->name('aboutme.edit');
    Route::get('/pricesedit', [EditPriceController::class, 'getPrices'])->name('prices.get');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
