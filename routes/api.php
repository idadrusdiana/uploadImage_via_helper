<?php

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

    Route::get('profile', [ProfileAPI::class, 'showProfile']);
    Route::post('profile', [ProfileAPI::class, 'addProfile']);
    Route::post('profile/{id}', [ProfileAPI::class, 'updateProfile']);
    Route::delete('profile/{id}', [ProfileAPI::class, 'deleteProfile']);