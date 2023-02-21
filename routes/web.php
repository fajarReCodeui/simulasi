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

Route::group(['prefix'=>'ujikom'], function(){
    route::get('test/1', 'TestsatuController@index')->name('ujikom.test.1');
    route::get('test/2', 'TestduaController@index')->name('ujikom.test.2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=> 'latiahan'], function(){
    route::get('create', 'Crud\CrudController@create')->name('latihan.create');
});