<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group(['prefix'=> 'v1'], function (){

Route::get('barang', 'API\ProductController@index');

Route::get('barang/{id}', 'API\ProductController@show');

// hapus data
Route::delete('barang/{id}', 'API\ProductController@destroy');

// tambah data
Route::post('barang', 'API\ProductController@store');

//});


// API category
// menampilkan semua data
Route::get('/category', 'CategoryController@index');
// menampilkan 1 data berdasarkan parameter yang dikirimkan
Route::get('/category/{id}', 'CategoryController@show');
// route untuk menyimpan data
Route::post('/category', 'CategoryController@store');
// route untuk update data
Route::put('/category/{id}', 'CategoryController@update');
// route untuk menghapus data
Route::delete('/category/{id}', 'CategoryController@destroy');
