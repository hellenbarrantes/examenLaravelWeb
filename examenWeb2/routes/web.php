<?php

Route::resource('users', 'UserController');
Route::resource('clientes', 'ClienteController');
Route::resource('productos', 'ProductoController');
Route::resource('inventarios', 'InventarioController');
Route::resource('facturacion', 'FacturaController');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
