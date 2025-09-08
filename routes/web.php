<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;

Route::get('/', fn() => view('home'))->name('home');
Route::resource('umkm', UmkmController::class)->only(['index','show']);
Route::view('/contact','contact')->name('contact');
