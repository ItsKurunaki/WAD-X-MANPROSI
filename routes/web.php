<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ContactdaruratController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return redirect('login');
});

Route::get('/panduan', function () {
    return view('panduan');
    
});
Route::get('/gempa', function () {
    return view('gempa');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/penanggulangan', function () {
    return view('penanggulangan');
});

Route::get('/lengkap', function () {
    return view('lengkap');
});


Route::get('/', [NewsController::class, 'index'])->name('home');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::resource('contactdarurat', ContactdaruratController::class);
Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form', [FormController::class, 'store'])->name('form.store');

