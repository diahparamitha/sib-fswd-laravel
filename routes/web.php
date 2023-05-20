<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [authController::class, 'index'])->middleware('checklogin');
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login', [authController::class, 'loginAkun']);
Route::get('/logout', [authController::class, 'logout']);

Route::get('/create', [userController::class, 'create']);
Route::post('/create', [userController::class, 'createUser']);
Route::get('/user/edit/{id}', [userController::class, 'edit']);
Route::post('/user/update/{id}', [userController::class, 'update']);

Route::post('/user/delete/{id}', [UserController::class, 'delete']);
Route::get('/user/detail/{id}', [userController::class, 'detail']);

