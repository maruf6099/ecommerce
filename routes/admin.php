<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;

// Admin Route
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//profile Route    
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('update.password');


    
