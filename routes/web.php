<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/all_devices', function () {
    return view('all_devices');
});

Route::get('/add_device_details', function () {
    return view('add_device_details');
});

Route::get('/edit_device_details', function () {
    return view('edit_device_details');
});

Route::get('/create_product', function () {
    return view('create_product');
});

Route::get('/create_category', function () {
    return view('create_category');
});

Route::get('/create_unit', function () {
    return view('create_unit');
});

Route::get('/my_products', function () {
    return view('my_products');
});

Route::get('/create_tax', function () {
    return view('create_tax');
});

Route::get('/credit_customer', function () {
    return view('credit_customer');
});

Route::get('/reprint_invoice',function(){
    return view('reprint_invoice');
});

Route::get('/reprint_kot',function(){
    return view('reprint_kot');
});

Route::get('/desktop_pos',function(){
    return view('desktop_pos');
});

Route::get('/pos_return',function(){
    return view('pos_return');
});

Route::get('/add_user',function(){
    return view('add_user');
});

Route::get('/my_user',function(){
    return view('my_user');
});

Route::get('/my_info',function(){
    return view('my_info');
});

Route::get('/banners',function(){
    return view('banners');
});

Route::get('/subscribers',function(){
    return view('subscribers');
});

Route::get('/menu_qr',function(){
    return view('menu_qr');
});
