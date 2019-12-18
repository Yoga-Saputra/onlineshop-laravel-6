<?php
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();
                    /* start web for user */

    Route::group(['prefix' => 'cart'], function () {
        Route::get('/getcart', "CartController@getcart");
        Route::post('/postcart', "CartController@getcart");
    });
Route::get('/index', 'HomeController@index')->name('yoga');
Route::get('/', "HomeController@index");





                            /*End Web For User  */


                        /* Start Admin */
Route::prefix('dashboard')->middleware(CheckAdmin::class)->group(function(){
    Route::get('/', "Dashboard\HomeController@index");
    Route::group(['prefix' => 'product'], function() {
        
        Route::get('/', "Dashboard\ProductController@index");
        Route::post('/insert', "Dashboard\ProductController@insert");
        Route::get('/edit/{id}', 'Dashboard\ProductController@edit');
        Route::post('/update/{id}', 'Dashboard\ProductController@update');
        Route::get('/delete/{id}', "Dashboard\ProductController@delete");
        Route::get('/detail', "Dashboard\ProductController@detail");
    });
    
});

Route::prefix('dashboard')->middleware(CheckAdmin::class)->group(function(){
    Route::group(['prefix' => 'category'], function () {
            Route::get('/', "Dashboard\CategoryController@index");
            Route::post('/insert', 'Dashboard\CategoryController@insert');
            Route::get('/edit/{id}', "Dashboard\CategoryController@edit");
            Route::get('/delete/{id}', "Dashboard\CategoryController@delete");
            Route::get('/up/{id}', 'Dashboard\CategoryController@sortup');
            Route::get('/down/{id}', 'Dashboard\CategoryController@sortdown');
    });
});
                            /*end admin  */

                            

