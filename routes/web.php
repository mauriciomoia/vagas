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

Route::post('/login', 'SiteController@login');
Route::get('/logout', 'SiteController@logout');
Route::post('/candidatar/{id}', 'SiteController@candidatar');
Route::get('/anuncio/{id}', 'SiteController@anuncio');

Route::get('/painel', 'Painel\\PainelController@index');
Route::post('/painel/anuncio/add', 'Painel\\PainelController@anuncioadd');
Route::get('/painel/anuncio/view/{id}', 'Painel\\PainelController@anuncioview');

