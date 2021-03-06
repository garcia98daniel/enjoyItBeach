<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('home.home');
});

Route::get('login', function () {
    return view('login.login');
});

Route::get('home', function () {
    return view('home.home');
});*/



Route::get('Login', 'Auth\AuthController@getLogin');

Route::post('Login', ['as' =>'Login', 'uses' => 'Auth\AuthController@postLogin']);

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index'); 

Route::get('confirmacionPedido', 'SaleController@confirmarPedido');

Route::get('comidas', 'FormulariosController@showRestaurants');
Route::get('comidas/{id}', 'FormulariosController@showComidasRestaurante');
Route::get('productos', 'FormulariosController@showStores');
Route::get('productos/{id}', 'FormulariosController@showProductosTienda');
Route::get('carpas', 'FormulariosController@carpas');
Route::post('reservar', 'ReservationController@store');
// Route::get('misReservas', 'ReservationController@index');
Route::get('hacerPedido', 'PurchaseController@store');
Route::get('misPedidos', 'FormulariosController@misPedidos');

//rutas para el vendedor
Route::post('addProduct','ProductController@store');
Route::delete('deleteProduct/{id}','ProductController@eliminar');
Route::get('productosVendedor', 'FormulariosController@showProductosVendedor');
Route::get('pedidos', 'FormulariosController@showPedidosRestaurant');
Route::get('confirmarPedido', 'SaleController@store');