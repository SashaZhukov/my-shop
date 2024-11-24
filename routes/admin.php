<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    Route::get('home', [AdminController::class, 'index'])->name('admin.home');
});
