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

Route::get('/skillPage', 'SkillPageController@index')->name('skillPage');

<<<<<<< HEAD
Route::post('/skillPage', 'SkillPageController@ajout')->name('skillPage');

=======
>>>>>>> 3ad840f9cd349de0c59669222af61d06d70045a7
Route::get('/skills/{id}', 'SkillsController@deleteUser')->name('skills');

Route::get('/skills/{id}/{id_comp}', 'SkillsController@destroy')->name('skills');

Route::post('/skills/{id}/{id_comp}', 'SkillsController@edit')->name('skills');

