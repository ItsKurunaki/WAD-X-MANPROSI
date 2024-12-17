<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/lengkap', function () {
    return view('lengkap');
});

Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form', [FormController::class, 'store'])->name('form.store');

