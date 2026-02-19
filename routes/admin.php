<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectCRUDController;
use App\Http\Controllers\Admin\ContactCRUDController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('projects', ProjectCRUDController::class);

Route::resource('contacts', ContactCRUDController::class)
    ->only(['index', 'show']);
