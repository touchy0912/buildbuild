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

Route::get('/', 'GamesController@index')->name('games.index');
Route::get('grandrule','GamesController@GrandRule')->name('games.grandrule');

Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('logout','Auth\LoginController@logout')->name('logout.get');



Route::group(['middleware'=>['auth']],function(){
Route::get("user1/{users}", "RolesController@user1")->name("role.user1");
Route::post("user2/{users}", "RolesController@user2")->name("role.user2");
Route::post("user3/{users}", "RolesController@user3")->name("role.user3");
Route::post("user4/{users}", "RolesController@user4")->name("role.user4");
Route::post("user5/{users}", "RolesController@user5")->name("role.user5");
Route::post("user6/{users}", "RolesController@user6")->name("role.user6");
Route::post('next1/{user}',"RolesController@next1")->name('role.next1');
Route::post('next2/{user}',"RolesController@next2")->name('role.next2');
Route::post('next3/{user}',"RolesController@next3")->name('role.next3');
Route::post('next4/{user}',"RolesController@next4")->name('role.next4');
Route::post('next5/{user}',"RolesController@next5")->name('role.next5');

Route::get('gameend', "ThemasController@gameend")->name("thema.gameend");

Route::post('themas/{users}',"ThemasController@random_thema")->name("thema.random");
Route::post('timers/{users}', "ThemasController@timer")->name("thema.timer");
Route::post('rolesfeed',"ThemasController@rolesfeed")->name("thema.rolesfeed");
Route::post('feedback',"ThemasController@feedback")->name("thema.feedback");

Route::get("roles", "RolesController@showroles")->name("roles.list");

});
