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

Route::prefix('v1')->group(function () {
    // authentication
    Route::post('auth/token', [\App\Http\Controllers\api\AuthController::class, 'token']);
    Route::post('logout', [\App\Http\Controllers\api\AuthController::class, 'logout'])->middleware('auth:sanctum');

    // Custom users routes
    Route::get('users/me', [\App\Http\Controllers\api\UsersApiController::class, 'me'])->middleware('auth:sanctum');

    // Custom listings routes
    Route::get('listings/featured', [\App\Http\Controllers\api\ListingsApiController::class, 'featured']);

    Route::apiResources([
        'users' => \App\Http\Controllers\api\UsersApiController::class,
        'listings' => \App\Http\Controllers\api\ListingsApiController::class,
        'listing_categories' => \App\Http\Controllers\api\ListingCategoryApiController::class,
    ]);
    Route::post('listings', [\App\Http\Controllers\api\ListingsApiController::class, 'store'])->middleware('auth:sanctum');

    Route::get('test', function (Request $request) {

//        //-----------------------------------------------------------------------------------------------------------------//
//        // check permissions
//        if ($request->user()->tokenCan('read')) {
//            return (new \App\Http\Resources\SuccessResource(new \App\DTOs\SuccessDTO('Success!')))->response()
//                ->setStatusCode
//                (Response::HTTP_OK);
//        }
//
//        return (new ErrorResource(new \App\DTOs\ErrorDTO('Unauthorized', Response::HTTP_UNAUTHORIZED, 'Token does not have permission.')))->response()->setStatusCode
//        (Response::HTTP_UNAUTHORIZED);
//        //-----------------------------------------------------------------------------------------------------------------//

//        $coordinates = \App\Misc\GeocodingIdentifier::getCoordinates('Magrath, AB Canada');
//        $location = \App\Misc\GeocodingIdentifier::getGeoLocationByCoordinates($coordinates['lat'], $coordinates['lon']);
        $location = \App\Misc\GeocodingIdentifier::getGeoLocationByAddress('Lethbridge, AB');

//        $location = \App\Misc\GeocodingIdentifier::getGeoLocationByPlaceId('ChIJWVEj6CCVblMRbMwciBepVfo');

        return new \Illuminate\Http\JsonResponse($location);
    })->middleware('auth:sanctum');

});
