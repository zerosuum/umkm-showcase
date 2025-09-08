<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

$umkms = [
    ['slug' => 'kopi-bu-sri', 'nama' => 'Kopi Bu Sri', 'deskripsi' => 'Kopi robusta rumahan', 'kategori' => 'F&B'],
    ['slug' => 'batik-ayu', 'nama' => 'Batik Ayu', 'deskripsi' => 'Batik tulis lokal', 'kategori' => 'Craft'],
    ['slug' => 'rendang-pak-udin', 'nama' => 'Rendang Pak Udin', 'deskripsi' => 'Rendang kemasan', 'kategori' => 'F&B'],
];

Route::get('/', function () use ($umkms) {
    return view('home', ['umkms' => $umkms]);
})->name('site.home');

Route::get('/umkm', function () use ($umkms) {
    return view('umkm.index', ['umkms' => $umkms]);
})->name('umkm.index');

Route::get('/umkm/{slug}', function (string $slug) use ($umkms) {
    $u = collect($umkms)->firstWhere('slug', $slug);
    return view('umkm.show', ['u' => $u]);
})->name('umkm.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/posts', [PostsController::class,'index']);