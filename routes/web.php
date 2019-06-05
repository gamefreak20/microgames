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

Auth::routes();

Route::get('/', 'MemberGameController@index')->name('game');

Route::group(['middleware' => ['role:Member|Creator|Admin']], function () {

});

Route::group(['middleware' => ['role:Creator|Admin']], function () {

});

Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/admin/users', 'AdminUsersController@index')->name('adminUsersIndex');
    Route::get('/admin/users/{id}', 'AdminUsersController@detail')->name('adminUsersDetail');
});






