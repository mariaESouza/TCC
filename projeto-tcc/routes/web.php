<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CollectionController;
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


Route::get('/tipo', function () {
    return view('tipo');
});

Route::get('/showProducts', function () {
    return view('showProducts');
});


Route::get('/collection', function () {
    return view('collection');
});


Route::resource('/dashboard/products', 'App\Http\Controllers\productsController');
Route::resource('/dashboard/type', TypeController::class);
Route::resource('/dashboard/collection', CollectionController::class);