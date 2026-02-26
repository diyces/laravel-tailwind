<?php

use Illuminate\Support\Facades\Route;

// ======================
// PUBLIC ROUTES
// ======================

use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\AboutController;
use App\Http\Controllers\Public\ProjectController;
use App\Http\Controllers\Public\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::prefix('projects')->name('projects.')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('index');
    Route::get('/{slug}', [ProjectController::class, 'show'])->name('show');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/', [ContactController::class, 'store'])->name('store');
});


// ======================
// ADMIN ROUTES
// ======================

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectCRUDController;
use App\Http\Controllers\Admin\ContactCRUDController;
use App\Http\Controllers\Admin\ProfileController;

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('projects', ProjectCRUDController::class);

        Route::resource('contacts', ContactCRUDController::class)
            ->only(['index', 'show']);

        Route::get('/profile/edit', [ProfileController::class, 'edit'])
            ->name('profile.edit');

        Route::put('/profile/update', [ProfileController::class, 'update'])
            ->name('profile.update');
    });


// ======================
// AUTH ROUTES
// ======================

require __DIR__.'/auth.php';