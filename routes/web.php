<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;

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
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/profile',[DashboardController::class,'profile']);

Route::get('/product',[ProductController::class,'index'])->name('admin.product');
Route::get('/product/create',[ProductController::class,'create'])->name('admin.product.create');
Route::post('/product/create',[ProductController::class,'store']);
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
Route::post('/product/edit/{id}',[ProductController::class,'update']);
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('admin.product.delete');
