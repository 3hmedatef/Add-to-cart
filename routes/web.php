<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[BookController::class,'index']);
Route::get('/book/{id}',[BookController::class,'addbooktocart'])->name('addbook.to.cart');
Route::get('/shopping-cart',[BookController::class,'bookcart'])->name('shopping.cart');
Route::delete('/delete-cart-product',[BookController::class,'deleteproduct'])->name('delete.cart.product');