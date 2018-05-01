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

Route::get('/index', 'indexController@index');
Route::get('/listbook', 'indexController@listbook')->name('listbook');
Route::get('/detailbook', 'indexController@detailbook')->name('detailbook');

Route::get('/admin', 'adminController@index')->name('admin.home');
Route::get('/admin/kelolabuku', 'adminController@kelolabuku')->name('admin.kelolabuku');
Route::get('/admin/kelolapemustaka', 'adminController@kelolapemustaka')->name('admin.kelolapemustaka');
Route::get('/admin/kelolapustakawan', 'adminController@kelolapustakawan')->name('admin.kelolapustakawan');
Route::get('/admin/datapeminjaman', 'adminController@datapeminjaman')->name('admin.datapeminjaman');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
