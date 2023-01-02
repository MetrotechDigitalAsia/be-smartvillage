<?php

use App\Http\Controllers\{
    AgendaController,
    ArticleCategoryController,
    ArticleController,
    ComplaintCategoryController,
    ComplaintController,
    DestinationPointController,
    ImportantNumberController,
    InvestationCategoryController,
    AdminController,
    InvestationController,
    LoginController
};

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [ArticleController::class, 'index']);

    Route::group(['prefix' => 'tourism-map'], function(){
    
        Route::get('/', [DestinationPointController::class, 'index'])->name('destinationPoint');
    
        Route::group(['prefix' => 'point-destinasi'], function(){
            Route::get('/', [DestinationPointController::class, 'index'])->name('destinationPoint');
            Route::get('/show/{destinationPoint}', [DestinationPointController::class, 'show']);
            Route::get('/create', [DestinationPointController::class, 'create']);
            Route::get('/change/{destinationPoint}', [DestinationPointController::class, 'changeStatus']);
            Route::post('/', [DestinationPointController::class, 'store'])->name('storeDestinationPoint');
            Route::post('/update/{destinationPoint}', [DestinationPointController::class, 'update']);
            Route::delete('/delete/{destinationPoint}', [DestinationPointController::class, 'destroy']);
        });
    
        Route::group(['prefix' => 'important-number'], function(){
            Route::get('/', [ImportantNumberController::class, 'index'])->name('importantNumber');
            Route::get('/show/{importantNumber}', [ImportantNumberController::class, 'show']);
            Route::get('/create', [ImportantNumberController::class, 'create']);
            Route::get('/change/{importantNumber}', [ImportantNumberController::class, 'changeStatus']);
            Route::post('/', [ImportantNumberController::class, 'store'])->name('storeImportantNumber');
            Route::post('/update/{importantNumber}', [ImportantNumberController::class, 'update']);
            Route::delete('/delete/{importantNumber}', [ImportantNumberController::class, 'destroy']);
        });
    
        Route::group(['prefix' => 'complaint'], function(){
            Route::get('/', [ComplaintController::class, 'index'])->name('complaint');
            Route::get('/show/{complaint}', [ComplaintController::class, 'show']);
            Route::delete('/delete/{complaint}', [ComplaintController::class, 'destroy']);
        });
    
    });
    
    Route::group(['prefix' => 'informasi-desa'], function(){
    
        Route::get('/', [ArticleController::class, 'index']);
        
        Route::group(['prefix' => 'prospek-desa'], function(){
            Route::get('/', function(){
                return view('admin.prospekDesa.index');
            });
        });
        Route::group(['prefix' => 'profil-desa'], function(){
            Route::get('/', function(){
                return view('admin.profil.index');
            });
        });
    
        Route::group(['prefix' => 'agenda'], function(){
            Route::get('/', [AgendaController::class, 'index'])->name('agendas');
            Route::get('/create', [AgendaController::class, 'create']);
            Route::get('/show/{agenda}', [AgendaController::class, 'show']);
            Route::post('/', [AgendaController::class, 'store'])->name('storeAgenda');
            Route::post('/update/{agenda}', [AgendaController::class, 'update']);
            Route::delete('/delete/{agenda}', [AgendaController::class, 'destroy']);
        });
    
        Route::group(['prefix' => 'artikel'], function(){
            Route::get('/', [ArticleController::class, 'index'])->name('article');
            Route::get('/create', [ArticleController::class, 'create']);
            Route::get('/show/{article}', [ArticleController::class, 'show']);
            Route::post('/', [ArticleController::class, 'store'])->name('storeArticle');
            Route::post('/update/{article}', [ArticleController::class, 'update']);
            Route::delete('/delete/{article}', [ArticleController::class, 'destroy']);
        });
    
        Route::group(['prefix' => 'umkm'], function(){
            Route::get('/', [InvestationController::class, 'index'])->name('investation');
            Route::get('/create', [InvestationController::class, 'create']);
            Route::get('/show/{investation}', [InvestationController::class, 'show']);
            Route::post('/', [InvestationController::class, 'store'])->name('storeInvestation');
            Route::post('/update/{investation}', [InvestationController::class, 'update']);
            Route::delete('/delete/{investation}', [InvestationController::class, 'destroy']);
        });

    
    });
    
    Route::group(['prefix' => 'master-data'], function(){
    
        Route::get('/', [ArticleCategoryController::class, 'index'])->name('articleCategory');
    
        Route::group(['prefix' => 'kategori-artikel'], function(){
            Route::get('/', [ArticleCategoryController::class, 'index'])->name('articleCategory');
            Route::get('/create', [ArticleCategoryController::class, 'create']);
            Route::get('/show/{articleCategory}', [ArticleCategoryController::class, 'show']);
            Route::post('/', [ArticleCategoryController::class, 'store'])->name('storeArticleCategory');
            Route::post('/update/{articleCategory}', [ArticleCategoryController::class, 'update']);
            Route::delete('/delete/{articleCategory}', [ArticleCategoryController::class, 'destroy']); 
        });
    
        Route::group(['prefix' => 'kategori-pengaduan'], function(){
            Route::get('/', [ComplaintCategoryController::class, 'index'])->name('complaintCategory');
            Route::get('/create', [ComplaintCategoryController::class, 'create']);
            Route::get('/show/{complaintCategory}', [ComplaintCategoryController::class, 'show']);
            Route::post('/', [ComplaintCategoryController::class, 'store'])->name('storeComplaintCategory');
            Route::post('/update/{complaintCategory}', [ComplaintCategoryController::class, 'update']);
            Route::delete('/delete/{complaintCategory}', [ComplaintCategoryController::class, 'destroy']); 
        });
    
        Route::group(['prefix' => 'kategori-investasi'], function(){
            Route::get('/', [InvestationCategoryController::class, 'index'])->name('investationCategory');
            Route::get('/create', [InvestationCategoryController::class, 'create']);
            Route::get('/show/{investationCategory}', [InvestationCategoryController::class, 'show']);
            Route::post('/', [InvestationCategoryController::class, 'store'])->name('storeInvestationCategory');
            Route::post('/update/{investationCategory}', [InvestationCategoryController::class, 'update']);
            Route::delete('/delete/{investationCategory}', [InvestationCategoryController::class, 'destroy']); 
        });
    
        Route::group(['prefix' => 'admin'], function(){
            Route::get('/', [AdminController::class, 'index'])->name('admin');
            Route::post('/', [AdminController::class, 'store'])->name('storeAdmin');
            Route::get('show/{admin}', [AdminController::class, 'show']);
            Route::get('create', [AdminController::class, 'create']);
            Route::post('update/{admin}', [AdminController::class, 'update']);
            Route::delete('delete/{admin}', [AdminController::class, 'destroy']);
        });
    
    });

});
