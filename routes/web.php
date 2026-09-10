<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Home Route
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/men', [PageController::class, 'men'])->name('men');
Route::get('/women', [PageController::class, 'women'])->name('women');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/product/{product}', [PageController::class, 'productView'])->name('product.view');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');