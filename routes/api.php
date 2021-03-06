<?php

use Illuminate\Http\Request;


Route::resource('task','TasksController',[
    'except' => ['create','edit','show']
]);
Route::resource('student','StudentsController',[
    'except' => ['create','store','edit','destroy']
]);
Route::resource('recruitments','RecruitmentsController',[
    'only' => ['index','update','destroy']
]);
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
