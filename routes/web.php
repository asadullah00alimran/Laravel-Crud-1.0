<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductController;

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

Route::get('/',[ProductController::class,'welcome'])->name('welcome');
Route::get('/addproduct',[ProductController::class,'addproduct'])->name('addproduct');
Route::post('/productstore',[ProductController::class,'productstore'])->name('productstore');
Route::get('/showproduct',[ProductController::class,'showproduct'])->name('showproduct');
Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name('editproduct');
Route::post('/update/{id}',[ProductController::class,'update'])->name('update');
Route::get('/delete/{id}',[ProductController::class,'delete'])->name('delete');
Route::get('/statusupdate/{id}',[ProductController::class,'statusupdate'])->name('statusupdate');

