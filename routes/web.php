<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\dm_DuongDungController;
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

Route::prefix('duong-dung')->group(function(){
    Route::get('/',[dm_DuongDungController::class,'index'] );
});

Route::prefix('categories')->group(function(){
        Route::get('/',[CategoriesController::class,'index'] );
        Route::get('/edit', [CategoriesController::class,'getCategory']);
    });

Route::middleware('auth.admin')->prefix('admin')->group(function(){
    Route::get('/login', [DashboardController::class, 'login']);
    Route::get('/', [DashboardController::class, 'index']);
    Route::prefix('products')->name('products.')->group(function(){
        Route::get('/', [ProductsController::class,'index'])->name('index');
        Route::get('/add',[ProductsController::class,'addProduct'])->name('product.add');
        Route::get('/edit', function(){
            return 'Sua sp';
        });
        Route::get('/delete', function(){
            return 'Xoa sp';
        });
    });

    Route::prefix('categories')->name('categories.')->group(function(){
        //get danh sach danh muc
        Route::get('/',[CategoriesController::class,'index'])->name('index');
        //hien thi form add danh muc
        Route::post('/', [CategoriesController::class,'postAddCategory']);
        //xu li them danh muc
        Route::post('/add', [CategoriesController::class,'handleAddCategory']);
        Route::get('/edit/{id}', [CategoriesController::class,'getCategory']);
        Route::post('/edit/{id}', [CategoriesController::class,'updateCategory']);
        Route::get('/delete/{id}', [CategoriesController::class,'deleteCategory']);
    });
});

Route::get('/', [HomeController::class, 'index']);

