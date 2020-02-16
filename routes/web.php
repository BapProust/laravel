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

//route for skill

Route::get('/skills', 'SkillsController@index')->name('skills');

Route::get('/skills/{id}', 'SkillsController@deleteUser')->name('skills');

Route::get('/skills/{id}/{id_comp}', 'SkillsController@destroy')->name('skills');

Route::post('/skills/{id}/{id_comp}', 'SkillsController@edit')->name('skills');

Route::post('/skills/{id}', 'SkillsController@ajout')->name('skills');

//route for skill page

Route::get('/skillPage', 'SkillPageController@index')->name('skillPage');

Route::get('/skillPage/{id}', 'SkillPageController@delete')->name('skillPage');

Route::post('/skillPage', 'SkillPageController@ajout')->name('skillPage');
