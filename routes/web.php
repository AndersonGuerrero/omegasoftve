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
Route::get('/blog/', 'Web@blog');
Route::get('/newsletter/', 'NewsletterController@newsletter');
Route::post('/newsletter/', ['as'=>'newsletter.send', 'uses'=>'NewsletterController@newsletterPost']);
Route::get('/quienes-somos/', 'Web@about');

Route::get('/nuestro-equipo/', 'TeamController@index');
Route::post('/nuestro-equipo/', ['as'=>'team.register', 'uses'=>'TeamController@register']);

Route::get('/contacto/', 'ContactController@contact');
Route::post('/contacto/', ['as'=>'contact.send', 'uses'=>'ContactController@contactPost']);

Route::get('/partners/', 'PartnerController@index');
Route::get('/portal-partner/', 'PartnerController@portal');
Route::get('/programa-partner/', 'PartnerController@program');
Route::post('/programa-partner/', ['as'=>'partner.send', 'uses'=>'PartnerController@programPost']);

Route::get('/demo/', 'DemoController@index');
Route::get('/demo-guiada/', 'DemoController@guiada');
Route::post('/demo-guiada-send/', ['as'=>'demo.send', 'uses'=>'DemoController@demoPost']);

Route::get('/english/', 'Web@english');

Route::get('/soluciones/itsm/', 'ITSMController@index');
Route::post('/soluciones/itsm/', ['as'=>'quotation.send', 'uses'=>'ITSMController@quotationSend']);

Route::get('/solicitud/serial/', 'Web@request_serial');
Route::get('/webcast/', 'WebcastController@index');
Route::post('/webcast/', ['as'=>'webcast.register', 'uses'=>'WebcastController@register']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/blog', 'BlogController');
Route::get('admin/', 'AdminController@index');