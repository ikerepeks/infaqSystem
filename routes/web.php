<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


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

// Student Controller Route
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/student/manage', [StudentController::class, 'manage'])->name('manage');
Route::post('/student/insert', [StudentController::class, 'insert'])->name('student.insert');
Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::patch('/student/update/{student}', [StudentController::class, 'update'])->name('student.manage');
Route::delete('/student/delete/{student}', [StudentController::class, 'destroy'])->name('delete');

// Get for Login and Register Vendor & Admin
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm'])->name('adminLogin');
Route::get('/login/vendor', [LoginController::class, 'showVendorLoginForm'])->name('vendorLogin');
Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm'])->name('adminRegister');
Route::get('/register/vendor', [RegisterController::class, 'showVendorRegisterForm'])->name('vendorRegister');

// Post for Login and Register Vendor & Admin
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/login/vendor', [LoginController::class, 'vendorLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/vendor', [RegisterController::class,'createVendor']);

// View Route
Route::view('/admin', 'admin.admin');
Route::view('/vendor', 'vendor.vendor');