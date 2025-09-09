<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;

Route::get('/', [UmkmController::class, 'home'])->name('home');

Route::resource('umkm', UmkmController::class);
Route::view('/contact', 'contact')->name('contact');
