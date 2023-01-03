<?php

use App\Http\Controllers\API\{
    ArticleController,
    ComplaintController,
    DestinationPointController,
    ImportantNumberController
};
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api_key'],function(){
    Route::get('/points', [DestinationPointController::class, 'index']);
    Route::get('/priority', [DestinationPointController::class, 'getPriorityPoints']);
    Route::get('/important-numbers', [ImportantNumberController::class, 'index']);
    Route::post('/filter-info', [ImportantNumberController::class, 'filterInfo']);
    Route::post('/filter', [DestinationPointController::class, 'filter']);
    Route::post('/complaint', [ComplaintController::class, 'store']);


    Route::group(['prefix' => 'blogs'], function(){
        Route::get('/', [ArticleController::class, 'index']);
        Route::get('/latest', [ArticleController::class, 'latest']);
    });

});