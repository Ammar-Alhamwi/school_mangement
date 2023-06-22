<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();
//login admin and user
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'home2'])->name('home2');
Route::get('/homeadmin', [App\Http\Controllers\HomeController::class, 'index'])->name('homeadmin');
//show mark sesone
Route::post('/sesone1', [App\Http\Controllers\Sesone1Controller::class, 'index'])->name('sesone1');
Route::post('/sesone2', [App\Http\Controllers\Sesone2Controller::class, 'index'])->name('sesone2');
//create mark seson
Route::get('/student/sesone1', [App\Http\Controllers\Sesone1Controller::class, 'create'])->name('student.sesone1');
Route::post('/student/sesone1', [App\Http\Controllers\Sesone1Controller::class, 'stor_mark'])->name('/student/sesone1');
Route::get('/student/sesone2', [App\Http\Controllers\Sesone2Controller::class, 'create'])->name('student.sesone2');
Route::post('/student/sesone2', [App\Http\Controllers\Sesone2Controller::class, 'store'])->name('student.sesone2');
//show class
Route::get('/book', [App\Http\Controllers\BookController::class, 'index']);
//shwo subject on class
Route::get('/show_sub', [App\Http\Controllers\SubjectNameController::class, 'index'])->name('show_sub');


//show studant info
Route::get('/show_info', [App\Http\Controllers\StudantController::class, 'show_info'])->name('show_info');
//update and edit studante info
Route::get('/edit_admin/{id}', [App\Http\Controllers\StudantController::class, 'edit_admin'])->name('edit_admin');
Route::post('/update_admin', [App\Http\Controllers\StudantController::class, 'update_admin'])->name('update_admin');
Route::post('/info', [App\Http\Controllers\StudantController::class, 'info'])->name('info');

//Route for register student

Route::get('/studentreg', 'App\Http\Controllers\StudantController@create')->name('student.create');
Route::post('/studentstore', 'App\Http\Controllers\StudantController@store')->name('studentstore');
//Route for admin ((register_student))
Route::get('/dashboard', 'App\Http\Controllers\StudantStatusController@index')->name('dashboard');
Route::get('/Studant/Trashdelete/{id}', 'App\Http\Controllers\StudantStatusController@SoftDelete')->name('Trashdelete');
Route::get('accept/{id}', 'App\Http\Controllers\StudantStatusController@accept')->name('accept');
// Route for admin((insert marks))
Route::post('/insertmarks', [App\Http\Controllers\Sesone1Controller::class, 'insertmarks'])->name('insertmarks');
// قائمة طلاب الصف الاول 
Route::get('/List_of_students1', [App\Http\Controllers\Sesone1Controller::class, 'create'])->name('List_of_students1');
//قائمة طلاب الصف الثاني 
Route::get('/List_of_students2', [App\Http\Controllers\Sesone1Controller::class, 'create2'])->name('List_of_students2');
// قائمة طلاب الصف الثالث
Route::get('/List_of_students3', [App\Http\Controllers\Sesone1Controller::class, 'create3'])->name('List_of_students3');
//سلوك الطالب 
Route::get('/behaviour', [App\Http\Controllers\StudentInfoController::class, 'index'])->name('behaviour');