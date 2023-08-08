<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});
