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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/sesone1/{id}', [App\Http\Controllers\Sesone1Controller::class, 'index'] );
Route::get('/sesone2/{id}', [App\Http\Controllers\Sesone2Controller::class, 'index'] );

Route::get('/book', [App\Http\Controllers\BookController::class, 'index'] );
Route::get('/sub/{id}', [App\Http\Controllers\SubjectNameController::class, 'index'] );
Route::get('/donwlode/{id}', [App\Http\Controllers\SubjectNameController::class, 'donlowd'] );

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student/sesone1', [App\Http\Controllers\Sesone1Controller::class,'create'])->name('student.sesone1');
Route::post('/student/sesone1', [App\Http\Controllers\Sesone1Controller::class,'store'])->name('student.sesone1');
Route::get('/student/sesone2', [App\Http\Controllers\Sesone2Controller::class,'create'])->name('student.sesone2');
Route::post('/student/sesone2', [App\Http\Controllers\Sesone2Controller::class,'store'])->name('student.sesone2');
Route::get('/show_info', [App\Http\Controllers\StudantController::class, 'show_info'])->name('show_info');
Route::get('/edit_admin/{id}', [App\Http\Controllers\StudantController::class, 'edit_admin'])->name('edit_admin');
Route::post('/update_admin', [App\Http\Controllers\StudantController::class, 'update_admin'])->name('update_admin');


//Route for register student
Route::get('/student/create', 'App\Http\Controllers\StudantController@create')->name('student.create');
Route::post('/student/store', 'App\Http\Controllers\StudantController@store')->name('student.store');
//Route for admin ((register_student))
Route::get('index/register', 'App\Http\Controllers\StudantStatusController@index');
Route::get('/Studant/Trashdelete/{id}', 'App\Http\Controllers\StudantStatusController@SoftDelete' );
Route::get('/post/restore/{id}', 'PostController@restore' )->name('post.restore');
