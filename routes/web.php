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
        Route::get('thongbao',['as' => 'student.index.thongbao','uses' => 'IndexController@thongbao']);

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
    Route::post('new',['as' => 'employer.index.post_post_new','uses' => 'IndexController@post_post_new']);
    Route::get('xem-tat-ca-don-ung-tuyen',['as'=> 'employer.index.xemtatcadonungtuyen','uses' => 'IndexController@get_tat_ca_don_ung_tuyen']);
    Route::get('don-ung-tuyen/{id}',['as'=> 'employer.index.xemtatcadonungtuyen.id','uses' => 'IndexController@get_tat_ca_don_ung_tuyen_id']);
    Route::get('hen-phong-van',['as'=> 'employer.index.henphongvan','uses' => 'IndexController@get_henphongvan']);
    Route::get('thong-bao-tu-nha-truong',['as'=> 'employer.index.thongbaotunhatruong','uses' => 'IndexController@get_thongbaotunhantruong']);
    Route::get('thong-bao-tu-nha-truong/{id}',['as'=> 'employer.index.thongbaotunhatruong.id','uses' => 'IndexController@get_thongbaotunhantruong_id']);
    Route::get('quan-ly-bai-dang',['as'=> 'employer.index.quanlybaidang','uses' => 'IndexController@get_cacbaidangcuaban']);
    Route::get('thong-tin-ca-nhan',['as'=> 'employer.index.thongtincanhan','uses' => 'IndexController@get_thongtincanhan']);
    
    
    
    Route::get('{id}',['as' => 'employer.index.index.id','uses' => 'IndexController@index_id']);
    

});

Route::middleware('checkAdmin')->prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/',['as' => 'admin.index','uses' => 'IndexController@index']);
    Route::get('/recruitments/wait',['as' => 'admin.recruitments.wait','uses' => 'IndexController@recruitments_wait']);
    Route::get('/recruitments/wait/{id}',['as' => 'admin.recruitments.wait.id','uses' => 'IndexController@recruitments_wait_id']);
    Route::get('/cac-bai-dang-doi-duyet',['as' => 'admin.recruitments.cacbaidangdoiduyet','uses' => 'IndexController@cacbaidangdoiduyet']);
    
});

Route::get('api/admin/recruitments/wait',['as' => "api.admin.recruitments.wait",'uses' => 'ApiController@recruitments_wait']);
Route::post('api/admin/recruitments/report',['as' => "api.admin.recruitments.report",'uses' => 'ApiController@recruitments_report']);

///students
/// Route::get('student/recruitments',['as' => 'student.recruitments.index','uses' => 'Students\RecruitmentsController@index']);



// tai file xuong
//Route::get('employer/recruitments/view',['as' => 'employer.recruitments.view','uses' => 'Employers\RecruitmentsController@viewtep']);

Route::post('employer/recruitments/add',['as' => 'employer.recruitments.add','uses' => 'Employers\RecruitmentsController@postadd']);


Route::get('recruitments',['as' => 'recruitments.index','uses' => 'Recruitments\IndexController@index']);
Route::get('recruitments/{id}',['as' => 'recruitments.index.id','uses' => 'Recruitments\IndexController@index_id']);
Route::get('dang-ky',['as' => 'dangky','uses' => 'Dangkycontroller@index']);
