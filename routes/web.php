<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

Route::get('/', [MainController::class, 'index']);

Route::get('phone/{id}', [MainController::class, 'phoneDetails']);

Route::post('admin', [AdminController::class, 'validateAdmin']);

Route::middleware(['validateAdmin'])->group(function () {
    Route::get('admin', [AdminController::class, 'index']);
});

