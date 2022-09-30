<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
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


Route::prefix('admin')->group(function(){
    // Route::get('/login', [DashboardController::class, 'login']);
    // Route::get('/', [DashboardController::class, 'index']);
    // Route::prefix('products')->name('products.')->group(function(){
    //     Route::get('/', [ProductsController::class,'index'])->name('index');
    //     Route::get('/add',[ProductsController::class,'addProduct'])->name('product.add');
    //     Route::get('/edit', function(){
    //         return 'Sua sp';
    //     });
    //     Route::get('/delete', function(){
    //         return 'Xoa sp';
    //     });
    // });
    Route::resource('/', DashboardController::class);
    Route::resource('/user', UserController::class);
    // Route::get('login', UserController::class, 'login')->name('login');
    // Route::post('login', UserController::class, 'login_action')->name('login.action');

    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});
Route::get('/', [HomeController::class, 'index']);
// Route::get('login', UserController::class, 'login')->name('login');
// Route::post('login', UserController::class, 'login_action')->name('login.action');

