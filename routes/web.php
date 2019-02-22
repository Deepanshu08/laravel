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
Route::get('/', "PageController@home");
Route::get('/product', "PageController@product");
Route::get('/contact', "PageController@contact");

/*Route::get('/', function () {
    return view('layout');
});*/

/*Route::get('/product', function () {
	$email='deepanshu.patel0876@gmail.com';
	$products=['Smartphone','laptops','Network Devices'];
    return view('product',['products'=>$products,'email'=>$email,'desc'=>request('desc')]);*/