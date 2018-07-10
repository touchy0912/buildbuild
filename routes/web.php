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

Route::get('/', 'GamesController@index');
Route::post('grandrule','GamesController@GrandRule')->name('games.grandrule');

Route::get("user1/{users}", "RolesController@user1")->name("role.user1");
Route::get("user2/{users}", "RolesController@user2")->name("role.user2");
Route::get("user3/{users}/{roles}", "RolesController@user3")->name("role.user3");
Route::get("user4/{users}/{roles}", "RolesController@user4")->name("role.user4");
Route::get("user5/{users}/{roles}", "RolesController@user5")->name("role.user5");
Route::get("user6/{users}/{roles}", "RolesController@user6")->name("role.user6");

