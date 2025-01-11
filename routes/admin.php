<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\RolesController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('admin.home');

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('admin.profile');
        Route::post('/logout', [ProfileController::class, 'logout'])->name('admin.logout');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::patch('/{user}', [ProfileController::class, 'update'])->name('admin.profile.update');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/', [UserController::class, 'store'])->name('user.store');
        Route::get('/{id}/view', [UserController::class, 'view'])->name('user.view');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::patch('/{user}/{block}', [UserController::class, 'update'])->name('user.update');
    });

    Route::prefix('roles')->group(function () {
        Route::get('/', [RolesController::class, 'index'])->name('roles.index');
        Route::get('/create', [RolesController::class, 'create'])->name('role.create');
        Route::post('/', [RolesController::class, 'store'])->name('role.store');
    });
});
