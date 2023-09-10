<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

Route::get('/', [MainController::class, 'index']);

Route::get('phone/{id}', [MainController::class, 'phoneDetails']);

//------------------------------- ADMIN ROUTES -------------------------------//

Route::get('admin', function (){ return view('admin.auth'); });

Route::post('admin', [AdminController::class, 'validateAdmin']);

//------ ADMIN ROUTES THAT REQUIRE AUTHENTICATION ------//

Route::middleware(['validateAdmin'])->group(function () {
    Route::get('admin/phones', [AdminController::class, 'index']);

    Route::get('admin/phone/create', [AdminController::class, 'createPhoneForm']);

    Route::get('admin/phone/delete/{id}', [AdminController::class, 'deletePhone']);
});

