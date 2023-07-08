<?php

use App\Http\Controllers\API\{
    AgendaController,
    ArticleController as ArticleControllerOld,
    ComplaintController,
    DestinationPointController as DestinationPointControllerOld,
    ImportantNumberController as ImportantNumberControllerOld,
    InvestationController as InvestationControllerOld,
    UserBusinessItemController as UserBusinessItemControllerOld,
    ItemBusinessCategoryController as ItemBusinessCategoryControllerOld,
    KerjaSamaController,
    MailController,
    NotificationController,
    UserDataController as UserDataControllerOld,
    UserLoginController as UserLoginControllerOld,
    UserMailController as UserMailControllerOld
};

use App\Http\Controllers\API\Sisfo\{
    UserBusinessItemController as SisfoUserBusinessItemController,
    ItemBusinessCategoryController as SisfoItemBusinessCategoryController,
    UserDataController,
    ArticleController,
    InvestationController
};

use App\Http\Controllers\API\Mobile\{
    FamilyController as MobileFamilyController,
    UserBusinessItemController as MobileUserBusinessItem,
    ItemBusinessCategoryController as MobileItemBusinessCategoryController,
    UserLoginController,
    UserMailController,
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
            'controller' => ArticleController::class
        ], function(){
            Route::get('/', 'index');
            Route::get('/latest', 'latest');
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
        });

        Route::group([
            'prefix' => 'umkmCategory',
            'controller' => SisfoItemBusinessCategoryController::class
        ], function(){
            Route::get('/', 'index');
        });

        Route::post('/complaint', [ComplaintController::class, 'store']);

    });

    Route::group(['prefix' => 'mobile'],function(){
        
        Route::group([
            'prefix' => 'family',
            'controller' => MobileFamilyController::class
        ], function(){
            Route::get('/{no_kk}', 'index');
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

    Route::controller(UserLoginControllerOld::class)->group(function(){
        Route::post('/login', 'login');
        Route::post('/changePassword/{userLogin}', 'changePassword');
        Route::post('/token/{userLogin}', 'getUserToken');
    });

    Route::get('/points', [DestinationPointControllerOld::class, 'index']);
    Route::get('/priority', [DestinationPointControllerOld::class, 'getPriorityPoints']);
    Route::get('/important-numbers', [ImportantNumberControllerOld::class, 'index']);
    Route::post('/filter-info', [ImportantNumberControllerOld::class, 'filterInfo']);
    Route::post('/filter', [DestinationPointControllerOld::class, 'filter']);

    Route::post('/complaint', [ComplaintController::class, 'store']);

    Route::get('/umkmCategory',[ItemBusinessCategoryControllerOld::class, 'index']);

    Route::group(['prefix' => 'blogs'], function(){
         Route::get('/', [ArticleController::class, 'index']);
    });

    Route::group(['prefix' => 'blog'], function(){
        Route::get('/latest', [ArticleControllerOld::class, 'latest']);
        Route::post('/{param}', [ArticleControllerOld::class, 'getDataByParam']);
    });

    Route::post('/investment', [InvestationControllerOld::class, 'store']);

    Route::group(['prefix' => 'umkm'], function(){

        Route::get('/',[UserBusinessItemControllerOld::class, 'index']);
        Route::post('/category',[UserBusinessItemControllerOld::class, 'filterByCategory']);
        Route::get('/latest',[UserBusinessItemControllerOld::class, 'getLatest']);
        Route::get('/{userId}',[UserBusinessItemControllerOld::class, 'getByUser']);
        Route::get('/search/{param}',[UserBusinessItemControllerOld::class, 'getDataByParam']);
        Route::post('/{userId}',[UserBusinessItemControllerOld::class, 'store']);
    });


    Route::get('/agenda',[AgendaController::class, 'index']);

    Route::group(['prefix' => 'surat'], function(){
        Route::controller(UserMailControllerOld::class)->group(function(){
            Route::get('/{userId}', 'getMailByUser');
            Route::post('/', 'store');
        });

        Route::get('/', [MailController::class, 'index']);
    });

    Route::group(['prefix' => 'resident'], function(){
        Route::controller(UserDataControllerOld::class)->group(function(){
            Route::get('/getByAge', 'getByAge');
            Route::get('/getByEducation', 'getByEducation');
            Route::get('/banjar', 'groupByBanjar');
            Route::get('/groupBy/{type}', 'getAndGroupBy');
            Route::get('/family/{noKK}', 'getFamily');
        });
    });

    Route::get('/kerjaSama', KerjaSamaController::class);

    Route::group(['prefix' => 'notification'], function(){
        Route::controller(NotificationController::class)->group(function(){
            Route::get('/{userLogin}', 'index');
            Route::get('/read/{databaseNotification}', 'read');
        });
    });


});