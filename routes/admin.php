<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectCRUDController;
use App\Http\Controllers\Admin\ContactCRUDController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::resource('projects', ProjectCRUDController::class)
    ->only(['index', 'show'])
    ->names('admin.projects');

Route::resource('contacts', ContactCRUDController::class)
    ->only(['index', 'show'])
    ->names('admin.contacts');

    require __DIR__.'/auth.php';