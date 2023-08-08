<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal');
Route::get('/contato', 'ContatoController@contato');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/login', function(){ return 'Login'; });

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; });
    Route::get('/fornecedores', function(){ return 'Fornecedores'; });
    Route::get('/produtos', function(){ return 'Produtos'; });

});
