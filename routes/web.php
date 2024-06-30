<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductsController;
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
    return view('dashboard.index');
});

Route::get('/',[IndexController::class,'index']);
Route::get('/products',[ProductsController::class,'index']);
Route::get('/products/create',[ProductsController::class,'create']);
Route::post('/products',[ProductsController::class,'store'])->name('products.store');
Route::get('/products/{id}/edit',[ProductsController::class,'edit']);
Route::put('/products/{id}',[ProductsController::class,'update'])->name('products.update');
Route::delete('/products/{id}',[ProductsController::class,'destroy'])->name('products.destroy');