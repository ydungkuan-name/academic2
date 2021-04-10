<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UploadController;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

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
   return View('pages.index');
});
Route::get('page',function(){
	return view('pages.index');
});


Route::get('/recover-password', function () {
    return view('pages.recover-password');
});
Route::get('/forgot-password', function () {
    return view('pages.forgot-password');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard.home-dashboard');
});

//Route::get('/upload-file', function () {
//    return view('pages.upload-file');
//});
//general
Route::view('/general','general');

Route::get('general', [AdminController::class,'show']);
Route::post('general', [AdminController::class,'create']);
Route::get('/general/{id}', [AdminController::class,'clickfuntion']);
// load data
Route::view('/admin','admin');

Route::get('admin', [AdminController::class,'show']);
Route::post('admin', [AdminController::class,'create']);
Route::get('/admin/{id}', [AdminController::class,'clickfuntion']);

//upfile
Route::view('/upload-file','pages.upload-file');

Route::post('upload-file',[UploadController::class,'index']);


//Route::get('/home', 'HocsinhController@index');
 
// Đăng ký thành viên
//Route::get('register', 'Auth\RegisterController@getRegister');
//Route::post('register', 'Auth\RegisterController@postRegister');
 
// Đăng nhập và xử lý đăng nhập
//Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
//Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);
 
// Đăng xuất
//Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);


//*********************************************************/
//SIGNUP router
Route::view('signup','pages.signup');
Route::post('signup', [SignupController::class,'storeUser']);

//LOGIN router
Route::view('login','pages.login');
Route::post('login', [LoginController::class,'login']);
