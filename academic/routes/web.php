<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\UploadController;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\client\ListtopicController;
use App\Http\Controllers\client\UploadfileController;
use App\Http\Controllers\client\ViewlistController;
use App\Http\Controllers\client\ViewdetailController;

use App\Http\Controllers\dashboard\AcademicController;
use App\Http\Controllers\dashboard\ContacController;
use App\Http\Controllers\dashboard\ContributionsController;
use App\Http\Controllers\dashboard\FacultyController;
use App\Http\Controllers\dashboard\FiledetailController;
use App\Http\Controllers\dashboard\ManageruserController;
use App\Http\Controllers\dashboard\TopicController;
use App\Http\Controllers\dashboard\ContributionDetailController;
use App\Http\Controllers\dashboard\MamagerFileController;


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

Route::get('/', [HomeController::class,'index']);

//Route::get('/upload-file', function () {
//    return view('pages.upload-file');
//});
//general
//Route::view('/general','general');

//Route::get('general', [AdminController::class,'show']);
//Route::post('general', [AdminController::class,'create']);
//Route::get('/general/{id}', [AdminController::class,'clickfuntion']);
// load data
//Route::view('/admin','admin');

//Route::get('admin', [AdminController::class,'show']);
//Route::post('admin', [AdminController::class,'create']);
//Route::get('/admin/{id}', [AdminController::class,'clickfuntion']);


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
Route::view('signup','signup');
Route::post('signup', [SignupController::class,'storeUser']);

//LOGIN router


//reset password x

//fogot password x

//profile

//page topic x

//read news

//========== DASH BOARD ==================
//create academic
Route::view('dash-board/','pages.dashboard.home');
//MANAGER ACADEMIC
Route::get('dash-board/manager-academic', [AcademicController::class,'index']);
Route::post('dash-board/manager-academic', [AcademicController::class,'create']);
Route::post('dash-board/manager-academic-edit', [AcademicController::class,'update']);
Route::post('dash-board/manager-academic-del', [AcademicController::class,'delete']);
//Route::post('dash-board/manager-academic', [AcademicController::class,'close']);

//MANAGER FACULTY
Route::get('dash-board/manager-faculty', [FacultyController::class,'index']);
Route::post('dash-board/manager-faculty', [FacultyController::class,'create']);
Route::post('dash-board/manager-faculty-edit', [FacultyController::class,'update']);
Route::post('dash-board/manager-faculty-del', [FacultyController::class,'delete']);

//MANAGER TOPIC
Route::get('dash-board/manager-topic', [TopicController::class,'index']);
Route::post('dash-board/manager-topic', [TopicController::class,'create']);
Route::post('dash-board/manager-topic-edit', [TopicController::class,'update']);
Route::post('dash-board/manager-topic-del', [TopicController::class,'delete']);

//MANAGER STUDENT
Route::get('dash-board/manager-student', [ManageruserController::class,'index']);
Route::post('dash-board/manager-student', [ManageruserController::class,'create']);
Route::post('dash-board/manager-student-edit', [ManageruserController::class,'update']);
Route::post('dash-board/manager-student-del', [ManageruserController::class,'delete']);

//MANAGER contribution
Route::get('dash-board/manager-contribution', [ContributionsController::class,'index']);
Route::post('dash-board/manager-contribution', [ContributionsController::class,'create']);
Route::post('dash-board/manager-contribution-edit', [ContributionsController::class,'update']);
Route::post('dash-board/manager-contribution-del', [ContributionsController::class,'delete']);
Route::post('dash-board/manager-contribution-download-all', [ContributionsController::class,'downloadAll']);
//MANAGER all file
Route::get('dash-board/manager-all-file', [MamagerFileController::class,'index']);
Route::post('dash-board/manager-all-file-download-all', [MamagerFileController::class,'downloadAll']);

//FILE DETAIL
Route::get('dash-board/file-detail', [FiledetailController::class,'index']);
Route::post('dash-board/file-detail', [FiledetailController::class,'comment']);
//Route::post('dash-board/file-detail', [FiledetailController::class,'update']);
Route::post('dash-board/file-detail-del', [FiledetailController::class,'delete_comment']);
// CONTRIBUTION DETAIL
Route::get('dash-board/contribution-detail', [ContributionDetailController::class,'index']);


 //view detail x
 Route::view('dash-board/student-account','pages.dashboard.student-account');


//view faculty


//========== client  ==================
//login
Route::get('login', [LoginController::class,'index']);
Route::post('login', [LoginController::class,'login']);
//logout
Route::get('logout', [LogoutController::class,'logout']);
//topic
Route::get('list-topic', [ListtopicController::class,'index']);
//upload file
Route::get('upload-file', [UploadfileController::class,'index']);
Route::post('upload-file', [UploadfileController::class,'uploadFile']);
//view list file
Route::get('view-list', [ViewlistController::class,'index']);

//view detail file
Route::get('view-detail', [ViewdetailController::class,'index']);

