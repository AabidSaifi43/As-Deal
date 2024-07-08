<?php

use App\Http\Controllers\AffilateController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [AffilateController::class, 'about'])->name('about');
Route::get('/contact', [AffilateController::class, 'contact'])->name('contact');
Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submit.form');
