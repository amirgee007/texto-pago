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
    session()->flash('app_message', 'Welcome to the Texto Pago.');
    return view('admin.auth.login');
});


Route::get('/test', array(
    'as' => 'test',
    'uses' => 'Admin\TestController@index'));



Route::get('/', array(
    'as' => 'signin',
    'uses' => 'Admin\AdminController@showLoginForm'));

Route::get('/login', array(
    'as' => 'admin.signin',
    'uses' => 'Admin\AdminController@showLoginForm'));

Route::get('logout', array(
    'as' => 'logout',
    'uses' => 'Admin\AdminController@logout'));





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//////// Main Logged In User routes /////////
Route::group(['namespace' =>'Admin' ,'middleware' => ['auth']] , function(){

    # Dashboard Management
    Route::get('/dashboard', array(
        'as' => 'index.dashboard',
        'uses' => 'AdminController@showHome'));



});


