<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevicerequestController;

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

Route::post("updatesound", [DevicerequestController::class,'updateSound']);
Route::post("updatered", [DevicerequestController::class,'updateRed']);
Route::post("updategreen", [DevicerequestController::class,'updateGreen']);
Route::post("updateblue", [DevicerequestController::class,'updateBlue']);
