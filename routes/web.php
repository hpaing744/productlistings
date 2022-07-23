<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShirtController;
use App\Http\Controllers\TrouserController;

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
Route::get('/',[ProductController::class,'home']);

Route::get('/product',[ProductController::class,'index']);

Route::get('/create',[ProductController::class,'create'])->middleware('auth');

Route::post('/products',[ProductController::class,'store'])->middleware('auth');

Route::get('/products/{product}/edit',[ProductController::class,'edit'])->middleware('auth');

Route::put('/products/{product}',[ProductController::class,'update'])->middleware('auth');

Route::delete('/products/{product}',[ProductController::class,'destroy'])->middleware('auth');

Route::get('/products/{product}',[ProductController::class,'show']);

Route::get('/shoe',[ShoeController::class,'index']);

Route::get('/shoecreate',[ShoeController::class,'shoecreate'])->middleware('auth');

Route::post('/shoes',[ShoeController::class,'shoestore'])->middleware('auth');

Route::get('/shoes/{shoe}/edit',[ShoeController::class,'edit'])->middleware('auth');

Route::put('/shoes/{shoe}',[ShoeController::class,'update'])->middleware('auth');

Route::delete('/shoes/{shoe}',[ShoeController::class,'destroy'])->middleware('auth');

Route::get('/shoes/{shoe}',[ShoeController::class,'show']);

Route::get('/shirt',[ShirtController::class,'index']);

Route::get('/shirtcreate',[ShirtController::class,'shirtcreate'])->middleware('auth');

Route::post('/shirts',[ShirtController::class,'shirtstore'])->middleware('auth');

Route::get('/shirts/{shirt}/edit',[ShirtController::class,'edit'])->middleware('auth');

Route::put('/shirts/{shirt}',[ShirtController::class,'update'])->middleware('auth');

Route::delete('/shirts/{shirt}',[ShirtController::class,'destroy'])->middleware('auth');

Route::get('/shirts/{shirt}',[ShirtController::class,'show']);

Route::get('/trouser',[TrouserController::class,'index']);

Route::get('/trousercreate',[TrouserController::class,'create'])->middleware('auth');

Route::post('/trousers',[TrouserController::class,'trouserstore'])->middleware('auth');

Route::get('/trousers/{trouser}/edit',[TrouserController::class,'edit'])->middleware('auth');

Route::put('/trousers/{trouser}',[TrouserController::class,'update'])->middleware('auth');

Route::delete('/trousers/{trouser}',[TrouserController::class,'destroy'])->middleware('auth');

Route::get('/trousers/{trouser}',[TrouserController::class,'show']);

Route::get('/login',[UserController::class,'login'])->name('login');

Route::post('/users/authenticate',[UserController::class,'authenticate']);

Route::get('/register',[UserController::class,'register'])->middleware('guest');

Route::post('/users',[UserController::class,'store']);

Route::post('/logout',[UserController::class,'logout']);


