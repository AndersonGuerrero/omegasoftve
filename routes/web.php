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

Route::get('/', 'Web@index')->name('index');
Route::get('/soporte/', 'Web@soport')->name('web-soporte');
Route::get('/nuestros-clientes/', 'Web@clients')->name('clients');
Route::get('/casos-de-exito/', 'Web@success_stories')->name('success_stories');
Route::get('/blog/', 'Web@blog')->name('blog');
Route::get('/newsletter/', 'NewsletterController@newsletter')->name('newsletter');
Route::post('/newsletter/', ['as'=>'newsletter.send', 'uses'=>'NewsletterController@newsletterPost']);
Route::get('/quienes-somos/', 'Web@about')->name('about');

Route::get('/nuestro-equipo/', 'TeamController@index')->name('team');
Route::post('/nuestro-equipo/', ['as'=>'team.register', 'uses'=>'TeamController@register']);

Route::get('/contacto/', 'ContactController@contact')->name('contact');
Route::post('/contacto/', ['as'=>'contact.send', 'uses'=>'ContactController@contactPost']);

Route::get('/partners/', 'PartnerController@index')->name('partner');
Route::get('/portal-partner/', 'PartnerController@portal')->name('portal-partner');
Route::get('/programa-partner/', 'PartnerController@program')->name('program-partner');
Route::post('/programa-partner/', ['as'=>'partner.send', 'uses'=>'PartnerController@programPost']);

Route::get('/demo/', 'DemoController@index')->name('demo');
Route::get('/demo-guiada/', 'DemoController@guiada')->name('demo-guiada');
Route::post('/demo-guiada-send/', ['as'=>'demo.send', 'uses'=>'DemoController@demoPost']);

Route::get('/english/', 'Web@english')->name('english');

Route::get('/soluciones/itsm/', 'ITSMController@index')->name('ITSM');
Route::post('/soluciones/itsm/', ['as'=>'quotation.send', 'uses'=>'ITSMController@quotationSend']);

Route::get('/solicitud/serial/', 'Web@request_serial')->name('request_serial');
Route::get('/webcast/', 'WebcastController@index')->name('webcast');
Route::post('/webcast/', ['as'=>'webcast.register', 'uses'=>'WebcastController@register']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/blog', 'BlogController@index')->name('blog-index');
Route::get('admin/blog/create/', 'BlogController@create')->name('blog-create');
Route::get('admin/blog/update/{post}/', 'BlogController@update')->name('blog-update');
Route::post('admin/blog/update/{post}/', 'BlogController@update')->name('blog-update');
Route::get('admin/blog/delete/{post}/', 'BlogController@delete')->name('blog-delete');
Route::post('admin/blog/store', ['as'=>'blog.store', 'uses'=>'BlogController@store']);
Route::get('admin/', 'AdminController@index');


Route::get('admin/category', 'CategoryController@index')->name('category-index');
Route::get('admin/category/create/', 'CategoryController@create')->name('category-create');
Route::get('admin/category/update/{category}/', 'CategoryController@update')->name('category-update');
Route::post('admin/category/update/{category}/', 'CategoryController@update')->name('category-update');
Route::get('admin/category/delete/{category}/', 'CategoryController@delete')->name('category-delete');
Route::post('admin/category/store', ['as'=>'category.store', 'uses'=>'CategoryController@store']);