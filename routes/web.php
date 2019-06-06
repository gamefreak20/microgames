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
    //inbox
    Route::get('/inbox', 'MemberInboxController@index')->name('memberInboxIndex');
    Route::get('/inbox/{id}', 'MemberInboxController@detail')->name('memberInboxDetail');
    Route::get('/inbox/create', 'MemberInboxController@create')->name('memberInboxCreate');
    Route::get('/inbox/create/{id}', 'MemberInboxController@createId')->name('memberInboxCreateWithId');

    //profile
    Route::get('/profile', 'MemberProfileController@index')->name('memberProfile');

    //users
    Route::get('/users', 'MemberUsersController@index')->name('memberUsers');
});

Route::group(['middleware' => ['role:Creator|Admin']], function () {
    //game
    Route::get('/game/create', 'CreatorGameController@create')->name('creatorGameCreate');
    Route::post('/game/create', 'CreatorGameController@store')->name('creatorGameCreatePost');
    Route::get('/gameLayout/{id}/{name}', 'CreatorGameController@createLayout')->name('creatorGameLayout');
});

Route::group(['middleware' => ['role:Admin']], function () {
    //admin users
    Route::get('/admin/users', 'AdminUsersController@index')->name('adminUsersIndex');
});

Route::get('/game/{name}', 'MemberGameController@detail')->name('gameDetail');
Route::get('/game/{id}/{name}', 'MemberGameController@detail')->name('gameDetail');
Route::get('/play/{id}/{name}', 'MemberGameController@play')->name('gamePlay');

//socialite

Route::get('login/{service}',
    'Auth\LoginController@redirectToProvider')->name('loginService');

Route::get('login/{service}/callback',
    'Auth\LoginController@handleProviderCallback');

//js loaders

Route::get('tags/{name}', 'AjaxController@tags')->name('AjaxTags');
Route::get('tag/{name}', 'AjaxController@tag')->name('AjaxTag');

//test need to remove

Route::get('test/setAllRoles', 'AdminUsersController@setAllRoles');
Route::get('test/assignRole/{userId}/{ruleName}', 'AdminUsersController@assignRole');
