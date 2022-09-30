<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('categories')->name('categories.')->group(function(){
    //get danh sach danh muc
    Route::get('/',[CategoriesController::class,'APIindex'])->name('index');
    //hien thi form add danh muc
    Route::post('/', [CategoriesController::class,'postAddCategory'])->name('post-add');
    //xu li them danh muc
    Route::post('/add', [CategoriesController::class,'handleAddCategory']);
    Route::get('/edit/{id}', [CategoriesController::class,'getCategory']);
    Route::post('/edit/{id}', [CategoriesController::class,'updateCategory']);
    Route::get('/delete/{id}', [CategoriesController::class,'deleteCategory'])->name('delete');
});
