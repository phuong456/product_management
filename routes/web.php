<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index']);

Route::get('create', [ProductController::class, 'create']);
Route::post('postCreate', [ProductController::class, 'postCreate']);

Route::get('delete/{id}', [ProductController::class, 'delete']);

Route::get('update/{id}', [ProductController::class, 'update']);
Route::post('postUpdate/{id}', [ProductController::class, 'postUpdate']);
