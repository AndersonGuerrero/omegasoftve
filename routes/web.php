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

Route::get('/', 'Web@index');
Route::get('/soporte/', 'Web@soport');
Route::get('/nuestros-clientes/', 'Web@clients');
Route::get('/casos-de-exito/', 'Web@success_stories');
