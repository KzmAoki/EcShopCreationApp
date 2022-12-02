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
//トップページ
Route::get('/', 'ShopController@index')->name('shops.index');
//resourcecontroller
Route::resource('shops', 'ShopController')->only(['create', 'store', 'show', 'edit', 'update', 'destroy']);
Route::resource('products', 'ProductController')->only(['store', 'show', 'edit', 'update', 'destroy']);
// 記事作成
Route::get('/products/create/{id}', 'ProductController@create')->name('products.create');
//購入
Route::get('/products/{product}/checkout', 'ProductController@checkout')->name('checkout');
Route::get('/products/{product}/success', 'ProductController@success')->name('success');
//CSV
Route::post('csv/{shop}/export', 'ProductController@csvExport')->name('csv.export');
//認証
Auth::routes();
//マイページ
Route::get('/home', 'HomeController@index')->name('home');
