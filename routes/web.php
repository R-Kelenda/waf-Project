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

Route::resource('members', 'memberController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::get('/customers/new', 'CustomerController@new');
Route::post('/customers/create', 'CustomerController@create')->name('customers.create'); 

Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::post('/customers/update', 'CustomerController@update');

