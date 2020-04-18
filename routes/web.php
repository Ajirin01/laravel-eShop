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
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all_products', "eShop_controller@all_products");
Route::get('/contact', "eShop_controller@contact");
Route::get('/all_products/{id}', function($id){
    return view('product_detail')->with(["product_id"=>$id]);
    });

Route::get('/test_middleware', function(){
    return view('all_products');
        })->middleware('auth');

Route::get('/cart', "cusmtor_account_controller@cart");
Route::get('/orders', "cusmtor_account_controller@orders");
Route::get('/account', "cusmtor_account_controller@index");
