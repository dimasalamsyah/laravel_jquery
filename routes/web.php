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

Route::get('/laravelajax',array('as'=>'ajax-pagination','uses'=>'ProductListController@productList'));

Route::any('laravelpagination/',array('as' => 'laravelpagination','uses' => 'LaravelPagination@index'));
Route::any('laravelajaxpagination/',array('as' => 'laravelajaxpagination','uses' => 'LaravelAjaxPagination@index'));

Route::resource('home','CrudController');

/*route master barang*/
Route::resource('barang','BarangController');
//Route::resource('barangpagination/',array('as' => 'masterbarangpagination','uses' => 'BarangController@getPaging'));

Route::any('master-barang/',array('as' => 'masterbarang','uses' => 'BarangController@index'));
Route::any('master-barang-pagination/',array('as' => 'masterbarangpagination','uses' => 'BarangController@getPaging'));