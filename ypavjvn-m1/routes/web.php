<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', function(){return view("welcome");})->name('welcome');

Route::get('/wherefindus', function(){return view("wherefindus");})->name('wherefindus');

Route::get('/catalog',  [App\Http\Controllers\ProductController::class, 'catalog'])->name('catalog');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'product']);

Route::get('/cart', [App\Http\Controllers\CartController::class, 'show']);

Route::get('/cart/add/{id}', [App\Http\Controllers\CartController::class, 'add']);

Route::get('/cart/minus/{id}', [App\Http\Controllers\CartController::class, 'minus']);

Route::get('/cart/plus/{id}', [App\Http\Controllers\CartController::class, 'plus']);

Route::get('/cart/pay/{id}', [App\Http\Controllers\CartController::class, 'pay']);

Route::get('/card/{id}', [App\Http\Controllers\ProductController::class, 'more'])->name('card');