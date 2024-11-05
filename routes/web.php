<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

Route::get('/',[bookController::class,'index']);
// ? Author
Route::get('/authors/{id}/restore',[AuthorController::class,'restore'])->name('authors.restore');
Route::delete('/authors/deleteAll',[AuthorController::class,'deleteAll'])->name('authors.deleteAll');
Route::get('/authors/{id}/showbooks',[AuthorController::class,'showbooks'])->name('authors.showbooks');
Route::resource('authors',AuthorController::class);

// ? Book
Route::get('/books/softdel',[BookController::class,'showdelbooks'])->name('books.softdel');
Route::get('/books/{id}/restore',[BookController::class,'restore'])->name('books.restore');
Route::delete('/books/{id}/forcedel',[BookController::class,'forceDelete'])->name('books.forcedel');
Route::delete('/books/deleteAll',[BookController::class,'deleteAll'])->name('books.deleteAll');
Route::resource('books',BookController::class);

// ? Category
Route::get('/categories/softdel',[CategoryController::class,'showdelcategories'])->name('categories.softdel');
Route::get('/categories/{id}/restore',[CategoryController::class,'restore'])->name('categories.restore');
Route::delete('/categories/{id}/forcedel',[CategoryController::class,'forceDelete'])->name('categories.forcedel');
Route::delete('/categories/deleteAll',[CategoryController::class,'deleteAll'])->name('categories.deleteAll');
Route::get('/categories/{id}/showbooks',[CategoryController::class,'showbooks'])->name('categories.showbooks');
Route::resource('categories',CategoryController::class);
