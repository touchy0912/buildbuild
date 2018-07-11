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
Route::post("user2/{users}", "RolesController@user2")->name("role.user2");
Route::post("user3/{users}", "RolesController@user3")->name("role.user3");
Route::post("user4/{users}", "RolesController@user4")->name("role.user4");
Route::post("user5/{users}", "RolesController@user5")->name("role.user5");
Route::post("user6/{users}", "RolesController@user6")->name("role.user6");
Route::get('gamestart',"RolesController@start")->name('role.start');
Route::get('themas',"ThemasController@random_thema")->name("thema.random");

