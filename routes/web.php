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
//show mark sesone
Route::get('/sesone1', [App\Http\Controllers\Sesone1Controller::class, 'index'] );
Route::get('/sesone2/{id}', [App\Http\Controllers\Sesone2Controller::class, 'index'] );
//create mark seson
Route::get('/student/sesone1', [App\Http\Controllers\Sesone1Controller::class,'create'])->name('student.sesone1');
Route::post('/student/sesone1', [App\Http\Controllers\Sesone1Controller::class,'store'])->name('student.sesone1');
Route::get('/student/sesone2', [App\Http\Controllers\Sesone2Controller::class,'create'])->name('student.sesone2');
Route::post('/student/sesone2', [App\Http\Controllers\Sesone2Controller::class,'store'])->name('student.sesone2');
//show class
Route::get('/book', [App\Http\Controllers\BookController::class, 'index'] );
//shwo subject on class
Route::post('/show_sub', [App\Http\Controllers\SubjectNameController::class, 'index'] )->name('show_sub');


//show studant info
Route::get('/show_info', [App\Http\Controllers\StudantController::class, 'show_info'])->name('show_info');
//update and edit studante info
Route::get('/edit_admin/{id}', [App\Http\Controllers\StudantController::class, 'edit_admin'])->name('edit_admin');
Route::post('/update_admin', [App\Http\Controllers\StudantController::class, 'update_admin'])->name('update_admin');


//Route for register student

Route::get('/studentreg', 'App\Http\Controllers\StudantController@create')->name('student.create');
Route::post('/studentstore', 'App\Http\Controllers\StudantController@store')->name('studentstore');
//Route for admin ((register_student))
Route::get('/dashboard', 'App\Http\Controllers\StudantStatusController@index');
<<<<<<< dashnew
Route::get('/Studant/Trashdelete/{id}', 'App\Http\Controllers\StudantStatusController@SoftDelete' )->name('student.SoftDelete');
=======
Route::get('/Studant/Trashdelete/{id}', 'App\Http\Controllers\StudantStatusController@SoftDelete' )->name('Trashdelete');
>>>>>>> main

Route::get('accept/{id}', 'App\Http\Controllers\StudantStatusController@accept')->name('accept');
