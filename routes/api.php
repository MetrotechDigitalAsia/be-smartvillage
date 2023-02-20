<?php

use App\Http\Controllers\API\{
    AgendaController,
    ArticleController,
    ComplaintController,
    DestinationPointController,
    ImportantNumberController,
    InvestationController,
    UserBusinessItemController,
    ItemBusinessCategoryController,
    UserLoginController
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

    Route::get('/umkmCategory',[ItemBusinessCategoryController::class, 'index']);

    Route::group(['prefix' => 'blogs'], function(){
        Route::get('/', [ArticleController::class, 'index']);
    });

    Route::group(['prefix' => 'blog'], function(){
        Route::get('/latest', [ArticleController::class, 'latest']);
        Route::post('/{param}', [ArticleController::class, 'getDataByParam']);
    });

    Route::post('/investment', [InvestationController::class, 'index']);

    Route::group(['prefix' => 'umkm'], function(){
        Route::get('/',[UserBusinessItemController::class, 'index']);
        Route::get('/{id}',[UserBusinessItemController::class, 'getByUser']);
        Route::post('/',[UserBusinessItemController::class, 'store']);
        Route::post('/category',[UserBusinessItemController::class, 'filterByCategory']);
        Route::get('/latest',[UserBusinessItemController::class, 'getLatest']);
    });


    Route::get('/agenda',[AgendaController::class, 'index']);

    Route::post('/login', [UserLoginController::class, 'login']);
    Route::post('/changePassword/{id}', [UserLoginController::class, 'changePassword']);


});