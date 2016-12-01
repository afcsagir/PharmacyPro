<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::post('submit', function(){
	//var_dump($_POST);
});
Route::get('/home', 'HomeController@index');
Route::get('/medicine-list', 'HomeController@newMedicine');
Route::post('/medicine-post', 'HomeController@getMedicineData');
Route::get('/showMedicine', 'HomeController@showMedicine');
Route::get('/edit-medicine-data/{medicineId}', 'HomeController@editMedicineData');
Route::get('/delete-medicine/{medicineId}', 'HomeController@deleteMedicine');
Route::get('/order-list', 'HomeController@newOrder');
Route::post('/order-post', 'HomeController@getOrderData');
Route::get('/show-order', 'HomeController@showOrder');
Route::get('/edit-order-data/{orderId}', 'HomeController@editOrderData');
Route::get('/delete-order/{orderId}', 'HomeController@deleteOrder');





