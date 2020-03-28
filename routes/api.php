<?php

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


Route::apiResource('buyers', 'API\Buyer\BuyerController', ['only'=>['index', 'show']]);


Route::apiResource('categories', 'API\Category\CategoryController', ['except'=>['create', 'edit']]);


Route::apiResource('products', 'API\Product\ProductController', ['only'=>['index', 'show']]);


Route::apiResource('sellers', 'API\Seller\SellerController', ['only'=>['index', 'show']]);


Route::apiResource('transactions', 'API\Transaction\TransactionController', ['only'=>['index', 'show']]);

Route::apiResource('users', 'API\User\UserController', ['except'=>['create', 'edit']]);

