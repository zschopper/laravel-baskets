<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductTypeController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::apiResource('product-types', App\Http\Controllers\ProductTypeController::class);
Route::apiResource('products', App\Http\Controllers\ProductController::class);
// Route::apiResource('baskets', App\Http\Controllers\BasketController::class);

Route::get    ('baskets', [BasketController::class, 'index']);
Route::post   ('baskets', [BasketController::class, 'store']);
Route::get    ('baskets/{item_id}/{user_id}', [BasketController::class, 'show']);
Route::put    ('baskets/{item_id}/{user_id}', [BasketController::class, 'update']);
Route::delete ('baskets/{item_id}/{user_id}', [BasketController::class, 'destroy']);

Route::fallback(function (){
  abort(404, 'API resource not found');
});