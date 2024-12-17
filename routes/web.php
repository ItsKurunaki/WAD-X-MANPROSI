<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ContactdaruratController;

Route::get('/', function () {
    return view('index');
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

Route::resource('contactdarurat', ContactdaruratController::class);
Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form', [FormController::class, 'store'])->name('form.store');
