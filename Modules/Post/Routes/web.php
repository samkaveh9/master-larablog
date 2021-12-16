<?php

use Illuminate\Support\Facades\Route;
use Modules\Post\Http\Controllers\PostController;

Route::group(['prefix' => 'posts', 'middleware' => 'auth'],function() {
    Route::get('/', [PostController::class,'index'])->name('posts.index');
    Route::get('create', [PostController::class,'create'])->name('posts.create');
    Route::post('post', [PostController::class,'store'])->name('posts.store');
    Route::get('{post}', [PostController::class,'show'])->name('posts.show');
    Route::get('{post}/edit', [PostController::class,'edit'])->name('posts.edit');
    Route::put('{post}', [PostController::class,'update'])->name('posts.update');
    Route::delete('{post}', [PostController::class,'destroy'])->name('posts.destroy');
});
