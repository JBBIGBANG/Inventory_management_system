<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/productviewtable', function () {
    return view('Pages/ProductViewTable');
});
Route::get('/newsalesmemo', function () {
    return view('Pages/NewsalesMemo');
});
Route::get('/jai', function () {
    return view('Pages/jai');
});
Route::get('/loginPage','App\Http\Controllers\LoginController@index');
Route::get('/login','App\Http\Controllers\LoginController@login');

// AddProductinfo
Route::get('/addproductform','App\Http\Controllers\ProductController@addproductform');
Route::Post('/addproduct','App\Http\Controllers\ProductController@store')->name('addproduct');
Route::get('/productviewtable','App\Http\Controllers\ProductController@show');
Route::get('/deleteproduct/{id}','App\Http\Controllers\ProductController@destroy');
Route::get('/editproduct/{id}','App\Http\Controllers\ProductController@edit');
Route::get('/editproduct','App\Http\Controllers\ProductController@some');
Route::post('/updateproduct/{id}','App\Http\Controllers\ProductController@update')->name('updateproduct');

//saleProductInfo

Route::Post('/orderproduct','App\Http\Controllers\saleController@store')->name('orderproduct');


//testsales
Route::get('/sales', function () {
    return view('Pages/Sales');
});
Route::get('/items', function () {
    return view('Pages/items');
});
Route::Post('/orders','App\Http\Controllers\OrdersController@store');
Route::get('/order','App\Http\Controllers\OrdersController@index');
// Route::post('/orders','App\Http\Controllers\OrdersController@items');
Route::get('/items/{id}','App\Http\Controllers\OrdersController@items');
Route::get('/salesdemopage','App\Http\Controllers\OrdersController@SalesDemoPage');



// Route::get('/salesdemopage', function () {
//     return view('Pages/Sales/SalesDemoPage');
// });



// Route::post('/orders','OrderController@store');
// Route::get('/items/{id}','OrderController@items');



Route::get('/frontpage', function () {
    return view('front_page');
});

