<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FileController;
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

// định nghĩa route

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::get('/add-category', [CategoryController::class, 'add'])->name('category.add');
Route::post('/add-category', [CategoryController::class, 'store'])->name('category.store');

Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('edit/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::get('/upload', [FileController::class, 'upload']);
Route::post('/upload', [FileController::class, 'postUpload']);