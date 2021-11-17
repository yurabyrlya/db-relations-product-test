<?php

use App\Models\Product;
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
    return view('product.list', [
        'data' => Product::with('category')->get()
    ]);
})->name('home');

Route::resource('category', \App\Http\Controllers\ProductCategoryController::class)->except('destroy','show');
Route::get('category/{category}', [\App\Http\Controllers\ProductCategoryController::class, 'destroy'])->name('category.destroy');

Route::resource('product', \App\Http\Controllers\ProductController::class)->except('destroy', 'show');
Route::get('product/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
