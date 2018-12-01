<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contain middleware group. Now create something great!
 depois alterar a view aqui nessa pagina

|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=> 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/clientes', "ClientesController");
    Route::resource('/fornecedores', "FornecedoresController");
    Route::resource('/funcionarios', "FuncionariosController");
    Route::resource('/veiculos', "VeiculosController");
    Route::resource('/produtos', "ProdutosController");
    Route::resource('/compras', "ComprasController");
    Route::resource('/pagamentos', "PagamentosController");
    
});

