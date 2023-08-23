<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TrendingApiController;

use App\Http\Controllers\{
    AdsController,
};

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/nft/ads/', [AdsController::class, 'nft_ads_api'])->name('nft_ads_api');
Route::get('trendings', [TrendingApiController::class, 'getTopActiveTrendings']);
