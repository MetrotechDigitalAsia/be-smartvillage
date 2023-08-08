<?php

use App\Http\Controllers\API\{
    AgendaController,
    ComplaintController,
    KerjaSamaController,
};

use App\Http\Controllers\API\Sisfo\{
    UserBusinessItemController as SisfoUserBusinessItemController,
    ItemBusinessCategoryController as SisfoItemBusinessCategoryController,
    ArticleCategoryController,
    UserDataController,
    ArticleController as SisfoArticleController,
    InvestationController
};

use App\Http\Controllers\API\Mobile\{
    FamilyController as MobileFamilyController,
    UserBusinessItemController as MobileUserBusinessItem,
    ItemBusinessCategoryController as MobileItemBusinessCategoryController,
    UserLoginController,
    UserMailController,
    ArticleController as MobileArticleController,
    KerjaSamaController as MobileKerjaSamaController,
    OutsiderController
};

use App\Http\Controllers\API\TourismMap\{
    ImportantNumberController,
    DestinationPointController
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

    Route::group(['prefix' => 'sisfo'],function(){

        Route::group([
            'prefix' => 'blog',
            'controller' => SisfoArticleController::class
        ], function(){
            Route::get('/', 'index');
            Route::get('/latest', 'latest');
            Route::get('/{article}', 'getDetail');
            Route::post('/search/{param}', 'search');
        });

        Route::group([
            'prefix' => 'investment',
            'controller' => InvestationController::class
        ], function(){
            Route::post('/', 'store');
        });

        Route::group([
            'prefix' => 'resident',
            'controller' => UserDataController::class
        ], function(){
            Route::get('/getByAge', 'getByAge');
            Route::get('/getByEducation', 'getByEducation');
            Route::get('/getByJob', 'getByJob');
            Route::get('/getByBanjar', 'getByBanjar');
            Route::get('/groupBy/{type}', 'getAndGroupBy');
        });

        Route::group([
            'prefix' => 'umkm',
            'controller' => SisfoUserBusinessItemController::class
        ], function(){
            Route::get('/', 'index');
            Route::get('/latest', 'getLatest');
            Route::get('/{userBusinessItem}', 'getDetail');
            Route::post('/search/{param}', 'search');
        });

        Route::group([
            'prefix' => 'umkmCategory',
            'controller' => SisfoItemBusinessCategoryController::class
        ], function(){
            Route::get('/', 'index');
        });

        Route::group([
            'prefix' => 'articleCategory',
            'controller' => ArticleCategoryController::class
        ], function(){
            Route::get('/', 'index');
        });

        Route::post('/complaint', [ComplaintController::class, 'store']);

    });

    Route::group(['prefix' => 'mobile'],function(){
        
        Route::group([
            'prefix' => 'kerja-sama',
            'controller' => MobileKerjaSamaController::class
        ], function(){
            Route::get('/', 'index');
        });

        Route::group([
            'prefix' => 'family',
            'controller' => MobileFamilyController::class
        ], function(){
            Route::get('/{no_kk}', 'index');
        });

        Route::group([
            'prefix' => 'article',
            'controller' => MobileArticleController::class
        ], function(){
            Route::get('/', 'index');
            Route::get('/latest', 'latest');
        });

        Route::group([
            'prefix' => 'mail',
            'controller' => UserMailController::class
        ], function(){
            Route::get('/{userId}', 'getMailByUser');
            Route::get('/all/mail', 'getAllMail');
            Route::get('/notification/{userLogin}', 'getMailNotification');
            Route::get('/notification/read/{databaseNotification}', 'readMailNotification');
            Route::post('/', 'store');
        });

        Route::group([
            'controller' => UserLoginController::class
        ], function(){
            Route::post('/login', 'login');
            Route::post('/changePassword/{userLogin}', 'changePassword');
            Route::post('/token/{userLogin}', 'getUserToken');
        });

        Route::group([
            'prefix' => 'umkm',
            'controller' => MobileUserBusinessItem::class
        ], function(){
            Route::get('/', 'index');
            Route::get('/latest', 'getLatest');
            Route::get('/{userId}','getByUser');
            Route::post('/{userId}','store');
        });

        Route::group([
            'prefix' => 'umkmCategory',
            'controller' => MobileItemBusinessCategoryController::class
        ], function(){
            Route::get('/', 'index');
        });

        Route::group([
            'prefix' => 'outsider',
            'controller' => OutsiderController::class
        ], function(){
            Route::post('/', 'store');
        });

        Route::post('/complaint', [ComplaintController::class, 'store']);

    });

    Route::group(['prefix' => 'tourism-map'],function(){

        Route::group([
            'prefix' => 'important-number', 
            'controller' => ImportantNumberController::class
        ], function(){
            Route::get('/', 'index');
            Route::post('/filter-info', 'filterInfo');
        });
        
        Route::group([
            'prefix' => 'destination-point',
            'controller' => DestinationPointController::class
        ], function(){
            Route::get('/', 'index');
            Route::get('/priority', 'getPriorityPoints');
            Route::post('/filter', 'filter');
        });

        Route::post('/complaint', [ComplaintController::class, 'store']);

    });

    Route::post('/complaint', [ComplaintController::class, 'store']);
    Route::get('/agenda',[AgendaController::class, 'index']);
    Route::get('/kerjaSama', KerjaSamaController::class);


});