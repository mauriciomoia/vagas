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

Route::get('/', 'SiteController@index');

Route::get('/login', 'SiteController@login');

Route::any('/candidatar/{id}', 'SiteController@candidatar');

Route::get('/anuncio/{id}', 'SiteController@anuncio');

Auth::routes();
Route::group(['prefix'=>'painel','namespace'=>'Painel','middleware'=>'auth'],function(){
	Route::resource('/painel','PainelController');
});
