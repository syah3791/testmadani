<?php

use Illuminate\Http\Request;
Use App\Users;
Use App\Tag;
Use App\Akun;
Use App\Kategori;
Use App\Subkategori;
Use App\Transaksi;

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
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'UserController@login');
    Route::post('signup', 'UserController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        //user
        Route::get('logout', 'UserController@logout');
        Route::get('user', 'UserController@user');
        //kategori
        Route::get('Kategori', 'KategoriController@index');
        Route::post('KategoriStore', 'KategoriController@store');
        Route::post('KategoriUpdate/{id}', 'KategoriController@update');
        Route::post('KategoriDelete/{id}', 'KategoriController@destroy');
        //subkategori
        Route::get('Subkategori', 'SubkategoriController@index');
        Route::post('SubkategoriStore', 'SubkategoriController@store');
        Route::post('SubkategoriUpdate/{id}', 'SubkategoriController@update');
        Route::post('SubkategoriDelete/{id}', 'SubkategoriController@destroy');
        //tag
        Route::get('Tag', 'TagController@index');
        Route::post('TagStore', 'TagController@store');
        Route::post('TagUpdate/{id}', 'TagController@update');
        Route::post('TagDelete/{id}', 'TagController@destroy');
        //akun
        Route::get('Akun', 'AkunController@index');
        Route::post('AkunStore', 'AkunController@store');
        Route::post('AkunUpdate/{id}', 'AkunController@update');
        Route::post('AkunDelete/{id}', 'AkunController@destroy');
        //transaksi
        Route::get('Transaksi', 'TransaksiController@index');
        Route::post('TransaksiStore', 'TransaksiController@store');
        Route::post('TransaksiUpdate/{id}', 'TransaksiController@update');
        Route::post('TransaksiDelete/{id}', 'TransaksiController@destroy');
    });
});
