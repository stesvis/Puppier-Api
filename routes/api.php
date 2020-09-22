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

Route::prefix('v1.0')->group(function () {
    Route::middleware('auth:api')->get('/users/me', function (Request $request) {
        return $request->user();
    });

    Route::get('test', function (Request $request) {
        return 'hello world';
    })->middleware('auth:sanctum');

    Route::post('auth/token', [\App\Http\Controllers\api\AuthController::class, 'token']);
});
