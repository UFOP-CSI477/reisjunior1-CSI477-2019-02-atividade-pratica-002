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

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);


Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/request',['as'=>'admin.request','uses'=>'Admin\RequestController@index']);
    Route::get('/admin/request/adicionar',['as'=>'admin.request.adicionar','uses'=>'Admin\RequestController@adicionar']);
    Route::get('/admin/request/salvar',['as'=>'admin.request.salvar','uses'=>'Admin\RequestController@salvar']);
    Route::get('/admin/request/listar',['as'=>'admin.request.listar','uses'=>'Admin\RequestController@listar']);
    Route::get('/admin/request/editar{id}',['as'=>'admin.request.editar','uses'=>'Admin\RequestController@editar']);
    Route::put('/admin/request/atualizar{id}',['as'=>'admin.request.atualizar','uses'=>'Admin\RequestController@atualizar']);
    Route::get('/admin/request/deletar{id}',['as'=>'admin.request.deletar','uses'=>'Admin\RequestController@deletar']);
});

