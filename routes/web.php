<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[BookController::class,'index'])->name('index');
Route::get('/{id}/show',[BookController::class,'show'])->name('show');
Route::get('/add',[BookController::class,'add'])->name('add');
Route::post('/books',[BookController::class,'store'])->name('store');
Route::get('/{id}/edit',[BookController::class,'edit'])->name('edit');
Route::post('/update',[BookController::class,'update'])->name('update');
Route::delete('/destroy',[BookController::class,'destroy'])->name('destroy');