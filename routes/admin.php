<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminRolesController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    Route::get('home', [AdminController::class, 'index'])->name('admin.home');

    Route::prefix('users')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('users.index');
        Route::get('/create', [AdminUserController::class, 'create'])->name('user.create');
        Route::post('/', [AdminUserController::class, 'store'])->name('user.store');
    });

    Route::prefix('roles')->group(function () {
        Route::get('/', [AdminRolesController::class, 'index'])->name('roles.index');
        Route::get('/create', [AdminRolesController::class, 'create'])->name('role.create');
        Route::post('/', [AdminRolesController::class, 'store'])->name('role.store');
    });
});
