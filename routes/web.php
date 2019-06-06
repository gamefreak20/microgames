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
    Route::delete('/inbox/{id}', 'MemberInboxController@destroy')->name('memberInboxDestroy');
    Route::get('/inbox/create', 'MemberInboxController@create')->name('memberInboxCreateForm');
    Route::post('/inbox/create', 'MemberInboxController@store')->name('memberInboxCreate');
    Route::get('/inbox/create/{id}', 'MemberInboxController@createId')->name('memberInboxCreateWithId');
    Route::get('/inbox/{id}', 'MemberInboxController@detail')->name('memberInboxDetail');

    //profile
    Route::get('/profile', 'MemberProfileController@index')->name('memberProfile');
    Route::get('/profile/edit', 'MemberProfileController@edit')->name('memberProfileEditForm');
    Route::patch('/profile/edit', 'MemberProfileController@patch')->name('memberProfileEdit');

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
    Route::get('/admin/users/roles', 'AdminUsersController@roles')->name('adminUsersRoles');
    Route::post('/admin/users/roles/assignRole', 'AdminUsersController@assignRole')->name('adminUsersRolesAssign');
    Route::get('/admin/tags/create', 'AdminUsersController@createTagForm')->name('adminTagCreatForm');
    Route::post('/admin/tags/create', 'AdminUsersController@createTag')->name('adminTagCreat');
});

//games
Route::get('/searchBar', 'MemberGameController@searchBar')->name('gameDetailSearchBar');

Route::get('/game/{name}', 'MemberGameController@search')->name('gameDetailName');
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
Route::get('users/{name}', 'AjaxController@users')->name('AjaxTag');

//test need to remove

Route::get('test/setAllRoles', 'AdminUsersController@setAllRoles');
//Route::get('test/assignRole/{userId}/{ruleName}', 'AdminUsersController@assignRole');
