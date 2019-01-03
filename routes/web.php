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
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Cicilan','cicilan_controller@index');
Route::get('/Cicilan/{id}','cicilan_controller@show');
Route::get('/cicil','cicilan_controller@cicil')->name('cicil');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Transaksi', 'HomeController@Transaksi')->name('Transaksi');

Route::post('/cicilan','cicilan_controller@save')->name('cicilan');
