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

    return Redirect::to('index');
});

/*** Routes For Login Modules */
Route::get('/index/', 'HomeController@index');

Route::get('/index/getSubCat/', 'HomeController@subCat');

Route::get('/index/getbarnd', 'HomeController@getBrand');

Route::get('/index/getitem', 'HomeController@getItem');

Route::get('/item/details', 'ItemController@itemDetails');

Route::get('/login', 'HomeController@login');

Route::post('/signup', 'HomeController@signup');

Route::post('/login', 'HomeController@logins');

Route::get('/logout', 'HomeController@logout');

Route::get('/myprofile', 'HomeController@myprofile');

Route::post('/forgot_password', 'HomeController@forgot_password');

Route::get('change_password', 'HomeController@change_password');

Route::post('change_password', 'HomeController@update_change_password');

Route::get('/resetpassword', 'HomeController@resetpassword');

Route::post('/resetpassword', 'HomeController@resetpasswordupdate');

Route::post('/update_otp', 'HomeController@update_otp');

Route::get('/check_delivery', 'ItemController@check_delivery');

Route::get('/address_manage', 'ItemController@address_manage');

Route::get('/add/address', 'ItemController@add_address');

Route::post('/address/save', 'ItemController@add_save');

Route::get('/delete/addresss', 'ItemController@delete_address');

Route::get('/edit/addresss', 'ItemController@edit_address');

Route::post('/address/update', 'ItemController@update_address');

Route::get('/add/cart', 'ItemController@add_cart');

Route::get('item/cart_list', 'ItemController@cart_list');

Route::get('/remove_cart', 'ItemController@remove_cart');

Route::post('/checkout', 'OrderController@checkout');

Route::post('/add/checkout', 'OrderController@add_checkout');


Route::post('/payment_success', 'OrderController@payment_success');
Route::post('/payment_failure', 'OrderController@payment_failure');

// Route::post('/payment_success', function () {
//     return view('order.success');
// });

// Route::post('/payment_failure', function () {
//     return view('order.failure');
// });

//Route::get('/payment_suu', 'OrderController@succ_payment');


Route::get('/payment', 'OrderController@form_pay');
Route::post('/create_hash', 'OrderController@create_hash');





Route::get('/special/package', 'PackagesController@specialPackage');
Route::get('/product_list', 'PackagesController@product_list');
Route::get('/sub_product_list', 'PackagesController@sub_product_list');



Route::post('/payment/save', 'OrderController@payment_save');




