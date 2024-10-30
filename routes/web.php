<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('dashboard')->middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/', [homeController::class, 'index'])->name('dashboard');
        Route::get('/category/list', [homeController::class, 'category'])->name('admin.add.category');
        Route::get('/category/add', [homeController::class, 'category'])->name('admin.list.category');
    });
});
