<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/edit/{id}', [CategoryController::class, 'showEdit'])->name('category.show-edit');
    Route::post('/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/delete', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/add', [CategoryController::class, 'add'])->name('category.add');
});

