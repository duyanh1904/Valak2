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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('show/name','ShowNameController@index')->name('show.name');

// Route::get('/category1', function () {
//     return view('category1');
// });

Route::get('/', 'HomeController@index');
Route::get('/insert', 'ProductController@getCate');
Route::get('/category/{id}' , 'ProductController@category');
Route::post('/submit-insert' , 'ProductController@insertProduct')->name("insert");
Route::get('/iphone', 'ProductController@iphone');
Route::get('/macbook', 'ProductController@macbook');
Route::get('/update/{id}', 'ProductController@getCate');



//Router::get('category/{id}')
