<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/',[ProductController::class,'index'])->name('product#index');
Route::get('create',[ProductController::class,'create'])->name('create#home');
Route::get('customer/createPage',[ProductController::class,'create'])->name('product#create');
Route::post('post/create',[ProductController::class,'postCreate'])->name('post#create');
Route::get('post/delete/{id}',[ProductController::class,'postDelete'])->name('post#delete');
Route::get('post/editPage/{id}',[ProductController::class,'editPage'])->name('post#editPage');

Route::post('post/update/{id}',[ProductController::class,'update'])->name('post#update');
Route::get('post/show/{id}',[ProductController::class,'show'])->name('post#show');
