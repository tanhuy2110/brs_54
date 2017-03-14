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

Route::get('admin','UserController@getLoginAdmin');
Route::post('admin','UserController@postLoginAdmin');
Route::get('logout', 'UserController@getLogoutAdmin');
Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function(){
    Route::resource('category', 'CategoryController');
    Route::resource('book', 'BookController');
    Route::resource('user', 'UserController');
});

Route::get('index', 'Pages\PagesController@index');
Route::get('viewbook/{id}', 'Pages\PagesController@viewBooks');

Route::get('loginpage', 'Pages\PagesController@getLogin');
Route::post('loginpage', 'Pages\PagesController@postLogin');
Route::get('logoutpage', 'Pages\PagesController@getLogout');
Route::post('registerpage', 'Pages\PagesController@postRegister');
Route::get('confirm/{confirmationCode}', 'Pages\PagesController@confirm')->name('verify.email');
