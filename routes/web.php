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
    return view('welcome');
});

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/manageusers', function () {
    return view('manageusers');
});


Route::get('/transaksi', function () {
    return view('transaksi');
});


//ITEM
Route::get('/viewitem','ItemController@view');
Route::post('/additem','ItemController@add');
Route::get('/edititem/{id}','ItemController@edit');
Route::post('/updateitem/{id}','ItemController@update');
Route::get('/deleteitem/{id}','ItemController@delete');

//MAKANAN
Route::get('/viewmakanan','MakananController@view');
Route::post('/addmakanan','MakananController@add');
Route::get('/editmakanan/{id}','MakananController@edit');
Route::post('/updatemakanan/{id}','MakananController@update');
Route::get('/deletemakanan/{id}','MakananController@delete');

//MINUMAN
Route::get('/viewminuman','MinumanController@view');
Route::post('/addminuman','MinumanController@add');
Route::get('/editminuman/{id}','MinumanController@edit');
Route::post('/updateminuman/{id}','MinumanController@update');
Route::get('/deleteminuman/{id}','MinumanController@delete');

Route::get('/daftarmenu',['uses'=>'ItemController@loadmenu','as'=>'item.index']);

Auth::routes();

//<!-- AAAAAAUUUUUUUUUTTTTTTTHHHHHHHHHHH -->
Auth::routes();

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::get('/', 'HomeController@index')->name('home');

//cart

Route::get('addtocart/{id}',['uses'=> 'ItemController@GetAddToCart', 'as' => 'item.addToCart']);
Route::get('reducetocart/{id}',['uses'=> 'ItemController@GetReduceToCart', 'as' => 'item.reduceToCart']);

Route::get('/shoppingcart',['uses'=> 'ItemController@GetCart', 'as' => 'item.shoppingCart']);

Route::get('/checkout',['uses'=> 'ItemController@GetCheckout', 'as' => 'checkout']);
Route::post('/postcheckout',['uses'=> 'ItemController@postCheckout', 'as' => 'checkout']);

Route::get('/pesanan','ItemController@viewPesanan');
Route::get('/history','ItemController@viewTransaksi');
Route::post('/verifikasi','ItemController@Verivikasi');
Route::post('/verifikasi{id}','ItemController@DeleteVerivikasi');
