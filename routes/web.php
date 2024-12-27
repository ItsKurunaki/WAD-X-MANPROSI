<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
// Route untuk user
Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

// Route yang memerlukan autentikasi user
Route::middleware(['auth'])->group(function() {
});

// Route yang memerlukan autentikasi admin
Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin'], function() {
    // Tambahkan route dashboard dan route lainnya di sini
});

