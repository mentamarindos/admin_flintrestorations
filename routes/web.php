<?php

use App\Http\Controllers\AmenityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyCategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TierController;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', 'login');

Auth::routes();

// Auth Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Property Management Routes
    Route::resource('countries', CountryController::class)->except(['create', 'edit']);
    Route::resource('amenities', AmenityController::class);
    Route::group(['as' => 'properties.', 'prefix' => 'property'], function () {
        Route::resource('categories', PropertyCategoryController::class);
    });
    Route::resource('properties', PropertyController::class);


    // Investment Plans / Tiers
    Route::resource('tiers', TierController::class);

    // User Management Routes
    Route::resource('users', UserControler::class);

    // Sell With Us Routes
    Route::resource('locations', LocationController::class);
    Route::resource('sellings', SellingController::class);

    // Website Management Routes
    Route::resource('kyc', KycController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('glossaries', GlossaryController::class);
    Route::resource('messages', MessageController::class);

    // Profile Routes
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::post('/update', [ProfileController::class, 'update'])->name('update');
        Route::post('/change-password', [ProfileController::class, 'updatePassword'])->name('change-password');
    });
});
