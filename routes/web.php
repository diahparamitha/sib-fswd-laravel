<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/dashboard', [AuthController::class, 'index'])->name('index');
Route::get('/', [AuthController::class, 'landing']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'category']);
Route::get('/category-list', [CategoryController::class, 'index_list']);


//Group Route untuk CATEGORY
Route::middleware('Admin')->group(function() {
    Route::post('/category/create', [CategoryController::class, 'createCategory']);
    Route::get('/category/edit/{id}', [CategoryController::class, 'editCategory']);
    Route::post('/category/update/{id}', [CategoryController::class, 'updateCategory']);
    Route::post('category/delete/{id}', [CategoryController::class, 'delete']);    
});

//Group Route untuk PRODUCT
Route::middleware('Admin')->group(function() {
    Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/product/update/{id}', [ProductController::class, 'update']);
    Route::post('/product/delete/{id}', [ProductController::class, 'delete']);
    Route::get('/product/create', [ProductController::class, 'create']);
    Route::post('/product/create', [ProductController::class, 'createProduct']);
});

//Group Route untuk USER
Route::middleware('Admin')->group(function () {
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/create', [UserController::class, 'createUser']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::post('/user/delete/{id}', [UserController::class, 'delete']);
});

Route::get('/product', [ProductController::class, 'index']);
Route::get('/detail-product/{id}', [ProductController::class, 'detail']);
Route::get('/product-list', [ProductController::class, 'index_list']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAkun']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/user/detail/{id}', [UserController::class, 'detail']);

