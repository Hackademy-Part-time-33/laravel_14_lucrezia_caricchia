<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::get('/post', [PostController::class, 'index'])->name('posts.index');
Route::get('/tag', [PostController::class, 'index'])->name('tags.index');
Route::get('/user', [PostController::class, 'index'])->name('users.index');


Route::middleware(['auth'])->group(function () {

    Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/post/save', [PostController::class, 'store'])->name('posts.store');
    Route::get('/post/{post}/', [PostController::class, 'show'])->name('posts.show');
    Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/post/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});
