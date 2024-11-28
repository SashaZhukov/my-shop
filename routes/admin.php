<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    Route::get('home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('users', [AdminUserController::class, 'index'])->name('admin.users.index');
});
