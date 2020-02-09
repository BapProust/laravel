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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD


Route::apiResource('/employees', 'EmployeesApiController');
Route::apiResource('/departments', 'DepartmentApiController');
=======
>>>>>>> c2af7ff6f054ad1817d04834acc38ee423674011
