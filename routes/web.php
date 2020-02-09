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
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/skills', 'SkillsController@index')->name('skills');

Route::get('/skills/{id}/{i}', 'SkillsController@destroy')->name('skills');

<<<<<<< HEAD
Route::post('/skills/{id}', 'SkillsController@edit')->name('skills');
=======
Route::get('/skills', 'SkillsController@edit')->name('skills');
>>>>>>> c2af7ff6f054ad1817d04834acc38ee423674011
