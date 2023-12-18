<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryChartController;


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

Route::resource('/product_type',ProductTypeController::class);
Route::resource('/brand',BrandController::class);
Route::resource('/product',ProductController::class);
Route::resource('/promotion',PromotionController::class);
Route::resource('/customer',CustomerController::class);
Route::get('category-chart',[CategoryChartController::class,'index']);

Route::get('/create', function () {
    return view('create');
});