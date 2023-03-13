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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');

//User Route
Route::resource('user', 'UserController')->except(['destroy', 'show']);
Route::get('user/delete/{id}', 'UserController@delete')->name('user.delete');
Route::get('user/logout', 'UserController@logout')->name('user.logout');
Route::get('user/reset', 'UserController@reset_password')->name('user.reset');
Route::post('user/reset/save', 'UserController@save_password')->name('user.save');
Route::get('user/search', 'UserController@search')->name('user.search');

//Product Route
Route::resource('product', 'ProductController')->except(['destroy', 'show']);
Route::get('product/create', 'ProductController@create')->name('product.create');
Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::get('product/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::get('product/search', 'ProductController@search')->name('product.search');

//Brand Route
Route::resource('brand', 'BrandController')->except(['destroy', 'show']);
Route::get('brand/create', 'BrandController@create')->name('brand.create');
Route::get('brand/edit/{id}', 'BrandController@edit')->name('brand.edit');
Route::get('brand/delete/{id}', 'BrandController@delete')->name('brand.delete');
Route::get('brand/search', 'BrandController@search')->name('brand.search');

// Card Detials of products
Route::resource('cart', 'CartController')->except(['destroy', 'show']);
Route::get('cart/details/{id}', 'CartController@cartDetail')->name('cart.details');
Route::get('cart/accepted/{id}', 'CartController@accepted')->name('cart.accepted');
Route::get('cart/complete', 'CartController@complete')->name('cart.complete');
Route::get('cart/done/{id}', 'CartController@viewDone')->name('cart.done');

// Roles Route
Route::resource('role', 'RoleController')->except('destroy', 'show');
Route::get('role/create', 'RoleController@create')->name('role.create');
Route::get('role/edit/{id}', 'RoleController@edit')->name('role.edit');
Route::get('role/delete/{id}', 'RoleController@delete')->name('role.delete');
Route::get('role/detail/{id}', 'RoleController@detail')->name('role.detail');
Route::get('role/search', 'RoleController@search')->name('role.search');
Route::post('role/permission/save', 'RoleController@save_permission');

// Slide Route
Route::resource('slide', 'SlideController')->except(['destroy', 'show']);
Route::get('slide/create', 'SlideController@create')->name('slide.create');
Route::get('slide/edit/{id}', 'SlideController@edit')->name('slide.edit');
Route::get('slide/delete/{id}', 'SlideController@delete')->name('slide.delete');

//News Route
Route::resource('news', 'NewsController')->except('destroy', 'show');
Route::get('news/search', 'NewsController@search')->name('news.search');
Route::get('news/edit/{id}', 'NewsController@edit')->name('news.edit');
Route::get('news/delete/{id}', 'NewsController@delete')->name('news.delete');

// Company information Route
Route::resource('company', 'CompanyController')->except('destroy', 'show');
Route::get('company/edit/{id}', 'CompanyController@edit')->name('company.edit');

});
