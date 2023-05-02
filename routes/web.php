<?php

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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/item', [App\Http\Controllers\ItemController::class, 'index']);

Route::POST('/item/create', [App\Http\Controllers\ItemController::class, 'create']);

Route::get('/item/{id}/edit', [App\Http\Controllers\ItemController::class, 'edit']);

Route::POST('/item/{id}/update', [App\Http\Controllers\ItemController::class, 'update']);

Route::get('/item/{id}/delete', [App\Http\Controllers\ItemController::class, 'delete']);


Auth::routes();

