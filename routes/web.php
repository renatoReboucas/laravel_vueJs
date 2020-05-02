<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::view('/home', 'home');
// Route::any('/home',["as" => "show", 'uses'=>'ProductsController@index']);

Route::group(['prefix'=>'products','Authenticate' => ['autenticador']],function(){
    Route::any('/getCategory',[ 'uses'=>'CategoryController@index']);
    Route::post('/createProduct',[ 'uses'=>'ProductsController@create']);
    Route::any('/getProducts',[ 'uses'=>'ProductsController@index']);
    Route::post('/store',["as" => "store", 'uses'=>'ProductsController@product']);
    Route::post('/edit', ["uses" => "ProductsController@edit"]);
    Route::post('/destroy', ["uses" => "ProductsController@destroy"]);
    Route::any('/show/{id}', ["as" => "show","uses" => "ProductsController@show"]);

    // Route::view('/getProducts', 'home');
});
