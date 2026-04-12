<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', [GalleryController::class, 'ShowGallery'])->name('gallery');
Route::get('/uploading', [GalleryController::class, 'ShowUploading'])->name('uploading');
Route::post('/guest-memories', [GalleryController::class, 'store'])->name('guest.memories');
Route::get('/gallery-studio', [GalleryController::class, 'gallery']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
