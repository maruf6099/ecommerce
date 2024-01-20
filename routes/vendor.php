<?php
use App\Http\Controllers\Backend\VendorController;

    Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
    
