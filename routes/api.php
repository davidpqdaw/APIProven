<?php

use App\Http\Controllers\api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product',[ProductController::class, 'index']);
Route::get('product/{id}',[ProductController::class, 'index']);
Route::put('product/{id}',[ProductController::class,'update']);
Route::delete('product/{id}',[ProductController::class,'destroy']);
Route::post('product', [ProductController::class, 'register']);
