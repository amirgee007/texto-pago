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


//////// Main Logged In User routes /////////
Route::group(['namespace' =>'Admin' ,'middleware' => ['auth']] , function(){

    # Dashboard Management
    Route::get('/dashboard', array(
        'as' => 'index.dashboard',
        'uses' => 'AdminController@showHome'));

    Route::get('/withdraw', array(
        'as' => 'get.withdraw',
        'uses' => 'TransactionController@showWithdraw'));

    Route::get('/historical', array(
        'as' => 'get.historical',
        'uses' => 'TransactionController@showHistorical'));


    Route::get('/my-account', array(
        'as' => 'get.my.account',
        'uses' => 'ProfileController@showMyAccount'));

    Route::get('/banks', array(
        'as' => 'get.banks',
        'uses' => 'BankController@showbanks'));

    Route::get('/update-phone', array(
        'as' => 'get.update.phone',
        'uses' => 'SettingsController@updatePhone'));

    Route::get('/update-pin', array(
        'as' => 'get.update.pin',
        'uses' => 'SettingsController@updatePin'));

    Route::get('/help', array(
        'as' => 'get.help',
        'uses' => 'SettingsController@showHelp'));

//////////////////////////////////////ALl POST ROUTES TO SAVE DATA/////////////////

    Route::post('/transaction-store', array(
        'as' => 'post.transaction.store',
        'uses' => 'TransactionController@transactionStore'));

    Route::post('/withdraw-store', array(
        'as' => 'post.withdraw.store',
        'uses' => 'TransactionController@withdrawStore'));

    Route::post('/my-account/store', array(
        'as' => 'post.my-account.store',
        'uses' => 'ProfileController@updateMyAccount'));

    Route::post('/bank/store', array(
        'as' => 'post.bank.store',
        'uses' => 'BankController@bankStore'));

    Route::post('/update-phone/store', array(
        'as' => 'post.phone.store',
        'uses' => 'SettingsController@updatePhoneStore'));

    Route::post('/update-pin/store', array(
        'as' => 'post.pin.store',
        'uses' => 'SettingsController@updatePinStore'));



});


