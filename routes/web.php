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

Route::get('/article/{id}', [ArticleController::class, 'details'])->name('article.details');

Route::get('/category/data-science', [ArticleController::class, 'dataScience'])->name('category.data-science');

Route::get('/category/network-security', [ArticleController::class, 'networkSecurity'])->name('category.network-security');

Route::get('/writers', [WriterController::class, 'writers'])->name('writers');

Route::get('/writer/{id}', [WriterController::class, 'profile'])->name('writer.profile');

Route::get('/about-us', function() {
    return view('about.about-us');
})->name('about-us');

Route::get('/popular', [ArticleController::class, 'popular'])->name('popular');