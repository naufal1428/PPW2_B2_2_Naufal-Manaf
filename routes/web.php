<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

//route resource
Route::resource('/', PostController::class);

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/index', [PostController::class, 'index'])->name('posts.index');

Route::delete('/posts/destroy/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/posts/show/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');