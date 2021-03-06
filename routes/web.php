<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\OrderController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes(['verify' => true]);

Route::get('/home', [ProfileController::class, 'index'])->name('profile.index');

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'categories', 'namespace' => 'Categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

    Route::group(['prefix' => 'products', 'namespace' => 'Products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::post('/', [ProductController::class, 'store'])->name('products.store');
        Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    });
});

/**
 * Client routes
 */
Route::group(['prefix' => 'client', 'namespace' => 'Client', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::get('category/{category}', [ClientController::class, 'showProducts'])->name('client.show');

    Route::group(['namespace' => 'Cart'], function () {
        Route::get('cart', [CartController::class, 'index'])->name('cart.index');
        Route::get('add-to-cart/{id}', [CartController::class, 'store'])->name('cart.store');
        Route::delete('remove-from-cart', [CartController::class, 'delete'])->name('cart.delete');
    });

    Route::group(['namespace' => 'Order'], function () {
        Route::post('order', [OrderController::class, 'store'])->name('order.store');
    });
});
