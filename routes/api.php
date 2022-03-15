<?php

use App\Http\Controllers\API\CategoryAPI;
use App\Http\Controllers\API\ProductAPI;
use App\Http\Controllers\API\ProfileAPI;

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

/*
/--------------------------------------
/ Profile
/-------------------------------------- 
*/
    Route::get('profile', [ProfileAPI::class, 'showProfile']);
    Route::post('profile', [ProfileAPI::class, 'addProfile']);
    Route::post('profile/{id}', [ProfileAPI::class, 'updateProfile']);
    Route::delete('profile/{id}', [ProfileAPI::class, 'deleteProfile']);

    Route::get('product', [ProductAPI::class, 'showProduct']);
    Route::post('product', [ProductAPI::class, 'addProduct']);
    Route::post('product/{id}', [ProductAPI::class, 'updateProduct']);
    Route::delete('product/{id}', [ProductAPI::class, 'delete Product']);
    
    Route::get('category', [CategoryAPI::class, 'showCategory']);
    Route::post('category', [CategoryAPI::class, 'addCategory']);
    Route::post('category/{id}', [CategoryAPI::class, 'updateCategory']);
    Route::delete('category/{id}', [CategoryAPI::class, 'delete Category']);

