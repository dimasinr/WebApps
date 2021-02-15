<?php

use Illuminate\Support\Facades\{Auth,Route};
use App\Http\Controllers\{CategoryController, HomeController, NavigationController, PostController, TagController, UserController};

Auth::routes();

Route::get('/', HomeController::class)->name('home');
Route::get('contact', [NavigationController::class, 'contact'])->name('contact');
Route::get('about', [NavigationController::class, 'about'])->name('about');
Route::get('login', [NavigationController::class, 'login'])->name('login');
Route::get('category' ,[CategoryController::class, 'category'])->name('category');
Route::get('posts' ,[PostController::class, 'index'])->name('story');

Route::middleware('auth')->group(function(){

    Route::prefix('posts')->group(function(){
        Route::get('create' ,[PostController::class ,'create'])->name('posts.create');
        Route::post('store' ,[PostController::class ,'store']);

        Route::get('{post:slug}/edit' ,[PostController::class, 'edit'])->name('posts.edit');
        Route::patch('{post:slug}/edit' ,[PostController::class, 'update']);

        Route::delete('{post:slug}/delete' ,[PostController::class, 'destroy'])->name('posts.delete');
    });

    Route::prefix('users')->group(function(){
        Route::get('profile' ,[UserController::class, 'profile'])->name('profile');

        Route::get('update' , [UserController::class, 'updateprofile'])->name('update');
        Route::patch('avastore' ,[UserController::class ,'avastore'])->name('avastore');
    });
});

Route::get('posts/{post:slug}' ,[PostController::class, 'show'])->name('posts.show');
Route::get('categories/{category:slug}' ,[CategoryController::class, 'show'])->name('categories.show');
Route::get('tags/{tag:slug}' ,[TagController::class, 'show'])->name('tags.show');
