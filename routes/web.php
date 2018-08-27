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



Route::group(['prefix' => 'painel',  'middleware' => 'auth'], function()	
  {


Route::get('/', function(){return view('painel.index');});

Route::get('brinquedos/',                   ['as' => 'brinquedos.lista',            'uses' => 'BrinquedosController@index']); 
Route::post('brinquedo/registrar',          ['as' => 'brinquedo.registrar',         'uses' => 'BrinquedosController@store']);
Route::post('brinquedo/atualizar',          ['as' => 'brinquedo.atualizar',         'uses' => 'BrinquedosController@update']);
Route::get('brinquedo/{id}/seleciona',      ['as' => 'brinquedo.selecionar',        'uses' => 'BrinquedosController@show']);

Route::post('brinquedo/fotos/registrar',    ['as' => 'brinquedo.fotos.registrar',   'uses' => 'FotosBrinquedoController@store']);
Route::get('brinquedo/fotos/{id}/remover',  ['as' => 'brinquedo.fotos.remover',     'uses' => 'FotosBrinquedoController@destroy']);


Route::get('clientes/',                     ['as' => 'clientes.lista',            'uses' => 'ClientesController@index']); 



Route::get('pedidos/',                      ['as' => 'pedidos.lista',            'uses' => 'PedidoController@index']); 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('logo/',                         ['as' => 'logo',                'uses' => 'LogoController@index']); 
Route::post('logo/registrar',               ['as' => 'logo.registrar',      'uses' => 'LogoController@store']);

});



Route::get('/',                     ['as' => 'lista',      'uses' => 'IndexController@index']);


Route::post('pedido/registrar',          ['as' => 'pedido.registrar',   'uses' => 'IndexController@store']);




Route::get('pedido/{id}/adicionar',      ['as' => 'pedido.adicionar',   'uses' => 'IndexController@show']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


