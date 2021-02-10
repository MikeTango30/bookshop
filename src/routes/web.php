<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book-management', [App\Http\Controllers\BookController::class, 'showBooksTable']);
Route::get('/add-book', [App\Http\Controllers\BookController::class, 'showNewBookForm']);
Route::post('/store-book', [App\Http\Controllers\BookController::class,'storeBook']);
Route::get('/book/delete/{book}', [App\Http\Controllers\BookController::class, 'destroy']);
Route::get('/book/update/form/{book}', [App\Http\Controllers\BookController::class, 'showUpdateForm']);
Route::post('/update/{book}', [App\Http\Controllers\BookController::class, 'updateBook']);
Route::get('/search', [App\Http\Controllers\BookController::class, 'search']);
Route::get('/books', [App\Http\Controllers\BookController::class, 'showBooks']);
Route::get('/books/{book}', [App\Http\Controllers\BookController::class, 'showBook']);
Route::post('/book/{book}/report', [App\Http\Controllers\ReportController::class, 'report']);


Route::get('/category-management', [App\Http\Controllers\GenreController::class, 'showGenres']);
Route::get('/add-category', [App\Http\Controllers\GenreController::class, 'showNewGenreForm']);
Route::post('/store-category', [App\Http\Controllers\GenreController::class, 'storeGenre']);
Route::get('/categories/delete/{category}', [App\Http\Controllers\GenreController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
