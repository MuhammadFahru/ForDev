<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Fitur
|--------------------------------------------------------------------------
|
| 1. CRUD Forum (Bisa buat topik baru, hapus, edit)
| 2. Bisa balas topik, kalau pake WYSIWYG editor lebih bagus.
| 3. Pas bales topik, bisa upload gambar sm video.
| 4. Securitynya. Setiap user hanya bisa edit topiknya sendiri.
|
*/

Auth::routes();

/*
|-------------------------------------------------------------------------------------------
| Posts Routes
|-----------------------------------------------------------------------------------------*/
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::prefix('thread')->group(function() {
        Route::get('/create', [PostController::class, 'create'])->name('create.thread');
        Route::post('/store', [PostController::class, 'store'])->name('store.thread');
        Route::post('/upload', [PostController::class, 'upload'])->name('upload.thread');
        Route::get('/edit/{post}', [PostController::class, 'edit'])->name('edit.thread');
        Route::patch('/update/{post}', [PostController::class, 'update'])->name('update.thread');
        Route::delete('/delete/{post}', [PostController::class, 'destroy'])->name('delete.thread');
        Route::get('/{post}', [PostController::class, 'show'])->name('show.thread');
    });
/*-----------------------------------------------------------------------------------------*/

/*
|-------------------------------------------------------------------------------------------
| Users Routes
|-----------------------------------------------------------------------------------------*/
    Route::get('/profile/user', [UserController::class, 'profile'])->name('user.profile');
/*-----------------------------------------------------------------------------------------*/
