<?php

use Illuminate\Http\Request;

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

//Auth Routes
Route::prefix('auth')->group(function() {

    Route::get('login', 'Auth\API\UserController@login')->name('login');
    Route::post('login', 'Auth\API\UserController@login')->name('login');
    Route::post('register', 'Auth\API\UserController@register')->name('register');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('users/details', 'Auth\API\UserController@details')->name('details');
    });

});

//Contacts Routes
Route::prefix('contacts')->group(function() {
    Route::get('/', 'ContactsController@index')->name('contacts.index');
    Route::post('/', 'ContactsController@store')->name('contacts.store');
    Route::get('{id}', 'ContactsController@show')->name('contacts.show');
    Route::put('{id}', 'ContactsController@update')->name('contacts.update');
    Route::delete('{id}', 'ContactsController@destroy')->name('contacts.destroy');
    Route::get('{id}/messages', 'ContactsController@messages')->name('contacts.messages');
});

//Message Routes
Route::prefix('messages')->group(function() {
    Route::get('/', 'MessagesController@index')->name('messages.index');
    Route::post('/', 'MessagesController@store')->name('messages.store');
    Route::get('{id}', 'MessagesController@show')->name('messages.show');
    Route::put('{id}', 'MessagesController@update')->name('messages.update');
    Route::delete('{id}', 'MessagesController@destroy')->name('messages.destroy');
});

