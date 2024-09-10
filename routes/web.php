<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('posts', [PostController::class, 'index'])->name('posts.index'); // List all posts
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create'); // Show form to create a new post
Route::post('posts', [PostController::class, 'store'])->name('posts.store'); // Save new post
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show'); // Show a single post

Route::post('posts/{post}/comments', [PostController::class, 'storeComment'])->name('posts.comments.store'); // Add a comment
Route::post('posts/{post}/impressions/{type}', [PostController::class, 'storeImpression'])->name('posts.impressions.store'); // Add an impression
