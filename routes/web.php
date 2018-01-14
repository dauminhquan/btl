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
    return redirect('login');
});
Route::get('/layout',function(){
    return view('layout');
});
Route::get('/auth',function(){
    if(Auth::guard('student')->attempt(['code' => 'A25428', 'password' => '12345679'],1)) {
        return 'Thành công';
    }
    return 'Thất bại';
});
Route::middleware('checkStudent')->prefix('student')->namespace('Students')->group(function(){

        Route::get('/',['as' => 'student.index','uses' => 'IndexController@index']);

        Route::get('sendcv',['as' => 'student.index.sendcv','uses' => 'IndexController@sendcv']);
        Route::post('sendcv',['as' => 'student.index.sendcv','uses' => 'IndexController@postsendcv']);

        Route::get('cvbox',['as' => 'student.index.cvbox','uses' => 'IndexController@cvbox']);
        Route::get('cvbox/{id}',['as' => 'student.index.cvbox.id','uses' => 'IndexController@cvbox_id']);

});
Route::get('login',['as' => 'login','uses' => 'Auth\LoginController@index']);
Route::post('login',['as' => 'login','uses' => 'Auth\LoginController@postindex']);
Route::get('logout',['as' => 'logout','uses' => 'Auth\LoginController@logout']);

//employers

Route::middleware('checkEmployer')->prefix('employer')->namespace('Employers')->group(function(){
    Route::get('recruitments',['as' => 'employer.recruitments.index','uses' => 'RecruitmentsController@index']);
    Route::get('recruitments/add',['as' => 'employer.recruitments.add','uses' => 'RecruitmentsController@add']);
    Route::get('/',['as' => 'employer.index.index','uses' => 'IndexController@index']);
    Route::get('new',['as' => 'employer.index.post_new','uses' => 'IndexController@post_new']);
    
    Route::get('{id}',['as' => 'employer.index.index.id','uses' => 'IndexController@index_id']);
    

});



///students
/// Route::get('student/recruitments',['as' => 'student.recruitments.index','uses' => 'Students\RecruitmentsController@index']);



// tai file xuong
//Route::get('employer/recruitments/view',['as' => 'employer.recruitments.view','uses' => 'Employers\RecruitmentsController@viewtep']);

Route::post('employer/recruitments/add',['as' => 'employer.recruitments.add','uses' => 'Employers\RecruitmentsController@postadd']);


Route::get('recruitments',['as' => 'recruitments.index','uses' => 'Recruitments\IndexController@index']);
Route::get('recruitments/{id}',['as' => 'recruitments.index.id','uses' => 'Recruitments\IndexController@index_id']);
