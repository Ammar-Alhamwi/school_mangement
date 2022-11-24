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
//Route for register student 
Route::get('/student/create', 'App\Http\Controllers\StudantController@create')->name('student.create');
Route::post('/student/store', 'App\Http\Controllers\StudantController@store')->name('student.store');
//Route for admin ((register_student))
Route::get('index/register', 'App\Http\Controllers\StudantController@index');