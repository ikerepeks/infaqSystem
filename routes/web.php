<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/p', [HomeController::class, 'store'])->name('welcome');

Auth::routes();

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::post('/student/insert', [StudentController::class, 'insert'])->name('student.insert');
Route::get('/student/manage', [StudentController::class, 'manage'])->name('manage');
Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::patch('/student/update/{student}', [StudentController::class, 'update'])->name('student.manage');
Route::delete('/student/delete/{student}', [StudentController::class, 'destroy'])->name('delete');