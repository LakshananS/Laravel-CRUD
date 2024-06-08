<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('categories', [CategoryController::class, 'index']);
Route::get('create', [CategoryController::class, 'create']);
Route::post('create', [CategoryController::class, 'store']);
Route::get('categories/{id}/edit',[CategoryController::class, 'edit']);
Route::put('update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('categories/{id}/delete', [CategoryController::class, 'destroy']);
Route::get('categories/{id}/single', [CategoryController::class, 'single']);

Route::get('/', function () {
    return view('welcome');
});
