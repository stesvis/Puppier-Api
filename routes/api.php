<?php

use App\Http\Resources\ErrorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
    // authentication
    Route::post('auth/token', [\App\Http\Controllers\api\AuthController::class, 'token']);

    Route::get('users/me', [\App\Http\Controllers\api\UsersApiController::class, 'me'])->middleware('auth:sanctum');
    Route::apiResources([
        'users' => \App\Http\Controllers\api\UsersApiController::class,
    ]);


    Route::get('test', function (Request $request) {
        if ($request->user()->tokenCan('read')) {
            return (new \App\Http\Resources\SuccessResource(new \App\DTOs\SuccessDTO('Success!')))->response()
                ->setStatusCode
                (Response::HTTP_OK);
        }

        return (new ErrorResource(new \App\DTOs\ErrorDTO('Unauthorized', Response::HTTP_UNAUTHORIZED, 'Token does not have permission.')))->response()->setStatusCode
        (Response::HTTP_UNAUTHORIZED);
    })->middleware('auth:sanctum');

});
