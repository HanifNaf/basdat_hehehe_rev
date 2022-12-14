<?php

use App\Http\Controllers\BeverageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PemesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SandwichController;
use App\Http\Controllers\SidesController;

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
// INDEX ROUTE
Route::get('/', [IndexController::class, "index"]);

// FEATURE ROUTE
Route::get('feature', [FeatureController::class, "index"]);

// MENU ROUTE
Route::get('menu', [MenuController::class, "index"]);

// CART ROUTE
Route::get('cart', [CartController::class, "index"]);

// PEMESANAN ROUTE
Route::get('pemesanan', [PemesananController::class, "index"]);

// SANDWICH ROUTE
Route::get('sandwiches', [SandwichController::class, "index"]);

// SNACK ROUTE
Route::get('sides', [SidesController::class, "index"]);

// BEVERAGE ROUTE
Route::get('beverages', [BeverageController::class, "index"]);

// ADD TO CART ROUTE
Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/add_to_cart', function(){
    return redirect('/cart');
});

// 
Route::post('/remove_from_cart', [CartController::class, 'remove_from_cart'])->name('remove_from_cart');
Route::get('remove_from_cart', function(){
    return redirect('/');
});

// 
Route::post('/remove_all_cart', [CartController::class, 'remove_all_cart']);
Route::get('/remove_all_cart', function(){
    return redirect('/menu');
});

// 
Route::post('/edit_product_quantity', [CartController::class, 'edit_product_quantity'])->name('edit_product_quantity');
Route::get('edit_product_quantity', function(){
    return redirect('/');
});

// 
Route::post('/place_order', [CartController::class, 'place_order'])->name('place_order');