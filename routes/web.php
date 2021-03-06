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

// Route::get('/', function () {
//     return view('welcome');
// });
//applying group route
Route::group(['middleware'=>'web'],function(){
    Route::get('/','RestaController@index');
    Route::get('/list','RestaController@list');
    Route::view('/add','add');
    Route::post('/add','RestaController@add');
    Route::get('/delete/{id}','RestaController@delete');
    Route::get('/edit/{id}','RestaController@edit');
    Route::post('/edit','RestaController@update');
    Route::view('/register','register');
    Route::post('/register','UsersController@register');
    Route::view('/login','login');
    Route::post('/login','UsersController@login');
    Route::get('/logout','UsersController@logout');
});

