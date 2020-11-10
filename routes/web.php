<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Fitur
|--------------------------------------------------------------------------
|
| 1. CRUD Forum (Bisa buat topik baru, hapus, edit)
| 2. Bisa balas topik, kalau pake WYSIWYG editor lebih bagus.
| 3. Pas bales topik, bisa upload gambar sm video.
| 4. Ini yg jadi titik berat, securitynya. Setiap user hanya bisa edit topiknya sendiri.
|
*/

Auth::routes();

/*
|-------------------------------------------------------------------------------------------
| Posts Routes
|-----------------------------------------------------------------------------------------*/
    Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home');
    Route::get('/create-thread', [App\Http\Controllers\PostController::class, 'create'])->name('create.thread');
    Route::post('/store-thread', [App\Http\Controllers\PostController::class, 'store']);
    Route::post('/create-thread/upload', [App\Http\Controllers\PostController::class, 'upload'])->name('upload.thread');
    Route::get('/thread/user', [App\Http\Controllers\PostController::class, 'show'])->name('show.thread');
/*-----------------------------------------------------------------------------------------*/

/*
|-------------------------------------------------------------------------------------------
| Users Routes
|-----------------------------------------------------------------------------------------*/
    Route::get('/profile/user', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
/*-----------------------------------------------------------------------------------------*/
