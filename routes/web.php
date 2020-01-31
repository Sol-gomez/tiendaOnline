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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::bind('product', function($slug){
    return App\Product::where('slug',$slug)->first();
});

Route::get('/', [
    'as'=>'home',
    'uses'=>'StoreController@index'
]);
 

Route::get('product/{slug}', [
    'as' => 'product-detail',
    'uses'=>'StoreController@show'
]);

 Route::resource('products','ProductController');

// Aquí es donde controlo lo del carrito de compras, agregar productos
Route::get('cart/add/{id}', "ProductController@store")->name("prueba")->middleware('auth');

//Rutas para el acceso a administrador
Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

    
    Route::get('/edit/{id}', 'UserUpdate@edit')->middleware('auth')->name('edit');
    Route::put('/update/{id}', 'UserUpdate@update')->name('update');


/*

Route::get('cart/show', [
    'as'=> 'cart-show',
    'uses'=> 'CartController@show'
]);

Route::get('cart/add/{product}', [
    'as'=> 'cart-add',
    'uses'=> 'CartController@add'
]);


Route::group(['middleware' => ['web']], function () {
    Route::bind('product', function($slug){
     return App\Product::where('slug', $slug)->first();
    });
    Route::get('cart/show', [
     'as' => 'cart-show',
     'uses' => 'CartController@show'
     ]);
    Route::get('cart/add/{product}', [
     'as' => 'cart-add',
     'uses' => 'CartController@add'
     ]);
    });
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('carrito2', 'ProductController@indexCart');
