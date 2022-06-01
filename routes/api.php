<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::post('add-categories',[CategoryController::class,'store']);
Route::get('delete-categories/{id}',[CategoryController::class,'destroy']);
Route::post('update-categories{id}',[CategoryController::class,'update']);

Route::get('products',[ProductController::class,'index']);
Route::get('products/{id}',[ProductController::class,'show']);
Route::post('add-products',[ProductController::class,'store']);
Route::get('delete-products/{id}',[ProductController::class,'destroy']);
Route::post('update-products{id}',[ProductController::class,'update']);


