<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\SubAdmin\SubAdminController;
use App\Http\Controllers\Admin\AdminDashbordController;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Admin\Location\DistrictController;
use App\Http\Controllers\Admin\Location\DivisionController;
use App\Http\Controllers\Admin\Location\SubDistrictController;
use App\Http\Controllers\Admin\Pathologie\PathologieController;
use App\Http\Controllers\Admin\Hospital\DiagnostichospitalController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/signup',[AdminController::class,'AdminSignup'])->name('admin.signup');
Route::post('admin/signup/store', [AdminController::class, 'AdminSignupStore'])->name('admin.signup.store');

Route::get('admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('admin/login/store', [AdminController::class, 'AdminLoginStore'])->name('admin.login.store');





Route::middleware(['admin'])->group(function () {
    Route::middleware(['adminRole:1'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashbordController::class, 'index'])->name('admin.dashboard');

    Route::resource('division', DivisionController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('subdistrict', SubDistrictController::class);
    Route::resource('diagnostic', DiagnostichospitalController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('pathology', PathologieController::class);


    });

    Route::middleware(['adminRole:2'])->prefix('subAdmin')->group(function () {
        Route::get('/dashboard', [SubAdminController::class, 'index'])->name('subadmin.dashboard');
    });

    Route::middleware(['adminRole:3'])->prefix('employee')->group(function () {
        Route::get('/dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
    });

    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
