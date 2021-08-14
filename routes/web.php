<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','admin']],function () {
   
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/index', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('employee.dashboard');
    Route::get('/role-register', [App\Http\Controllers\Admin\DashboardController::class, 'registered'])->name('registered');
    Route::get('create', [App\Http\Controllers\EmpController::class, 'create'])->name('employee.Edetails');
    Route::get('new', [App\Http\Controllers\EmpController::class, 'new'])->name('employee.create');
    
    Route::post('store', [App\Http\Controllers\EmpController::class, 'store'])->name('employee.store');

    Route::get('leave', [App\Http\Controllers\LeaveController::class, 'leave'])->name('employee.leave');

    Route::get('edit/{id}', [App\Http\Controllers\EmpController::class, 'edit'])->name('employee.edit');
    Route::post('update/{id}', [App\Http\Controllers\EmpController::class, 'update'])->name('employee.update');
    Route::get('show', [App\Http\Controllers\AttenController::class, 'show'])->name('employee.Atten');

  

});


