<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home.home');
// })->name('home');

Route::get('/', [ArticleController::class, 'home'])->name('home');
