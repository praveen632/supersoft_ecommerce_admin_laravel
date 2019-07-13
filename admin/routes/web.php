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

Route::get('/', function () {

    return Redirect::to('login');
});

/*** Routes For Login Modules */
Route::get('/login', function () {
    return view('login');
});

Route::post('/signup', 'HomeController@signup');

Route::resource('/home', 'HomeController');

Route::get('/change_password', 'HomeController@change_password');

Route::post('/change_password/update', 'HomeController@updatePassword');

Route::get('/logout', 'HomeController@checkLogout');

Route::get('/category', 'CategoryController@index');

Route::get('/add/category', 'CategoryController@add');

Route::post('/category/save', 'CategoryController@save');

Route::get('/category/edit', 'CategoryController@edit');

Route::post('/category/update', 'CategoryController@update');

Route::get('/category/delete', 'CategoryController@delete');

Route::get('/sub_category', 'SubCategoryController@index');

Route::get('/add/sub_category', 'SubCategoryController@add');

Route::post('/sub_category/save', 'SubCategoryController@save');

Route::get('/sub_category/edit', 'SubCategoryController@edit');

Route::post('/sub_category/update', 'SubCategoryController@update');

Route::get('/sub_category/delete', 'SubCategoryController@delete');

Route::get('/brand', 'BrandController@index');

Route::get('/add/brand', 'BrandController@add');

Route::get('/brand/getsubdata/', 'BrandController@getSubCat');

Route::post('/brand/save', 'BrandController@save');

Route::get('/brand/edit', 'BrandController@edit');

Route::get('/brand/delete', 'BrandController@delete');

Route::post('/brand/update', 'BrandController@update');

Route::get('/item', 'ItemController@index');

Route::get('/add/item', 'ItemController@add');

Route::get('/item/getbrand', 'ItemController@getbrand');

Route::post('/item/save', 'ItemController@save');

Route::get('/item/edit', 'ItemController@edit');

Route::post('/item/update', 'ItemController@update');

Route::get('/item/delete', 'ItemController@delete');

Route::get('/item/view', 'ItemController@view');

Route::get('/location', 'LocationController@index');

Route::get('/location/search', 'LocationController@search');

Route::get('/location/add', 'LocationController@addlocation');

Route::post('location/save', 'LocationController@save');