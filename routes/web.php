<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\SubAdmin\SubAdminController;
use App\Http\Controllers\Admin\AdminDashbordController;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Admin\Gallery\GalleryController;
use App\Http\Controllers\Admin\Location\DistrictController;
use App\Http\Controllers\Admin\Location\DivisionController;
use App\Http\Controllers\Admin\Ambulance\AmbulanceController;
use App\Http\Controllers\Admin\Pharmacie\PharmacieController;
use App\Http\Controllers\Admin\Location\SubDistrictController;
use App\Http\Controllers\Admin\Pathologie\PathologieController;
use App\Http\Controllers\Admin\Location\Unions\UnionsController;
use App\Http\Controllers\Admin\Hospital\DiagnostichospitalController;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/doctor/list/{hospital}',[HomeController::class,'DoctorList'])->name('home.doctor.list.hospital');
Route::get('/doctor/single/{doctor}',[HomeController::class,'DoctorSingle'])->name('single.doctor');
Route::get('/Pathology/list/{hospital}',[HomeController::class,'PathologyList'])->name('home.Pathology.list.hospital');
Route::get('/gallery',[HomeController::class,'Gallery'])->name('gallery.list');
Route::get('/card',[HomeController::class,'Signup'])->name('signup');
Route::post('/card/store',[HomeController::class,'SignupStore'])->name('signup.store');
Route::get('/doctor/search', [HomeController::class, 'SearchDoctor'])->name('search.doctor');
Route::get('/diagnostic/search', [HomeController::class, 'SearchDiagnostic'])->name('search.diagnostic');
Route::get('/home/service', [HomeController::class, 'HomeService'])->name('home.service');
Route::get('/pharmacy/list', [HomeController::class, 'pharmacyList'])->name('pharmacy.list');
Route::get('/card/search', [HomeController::class, 'CardSearch'])->name('card.search');
Route::get('/dental', [HomeController::class, 'Dental'])->name('dental');
Route::get('/eye', [HomeController::class, 'Eye'])->name('eye');
Route::get('/blood', [HomeController::class, 'Blood'])->name('blood');
Route::get('/ambulances', [HomeController::class, 'Ambulance'])->name('ambulances');





Route::get('admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('admin/login/store', [AdminController::class, 'AdminLoginStore'])->name('admin.login.store');





Route::middleware(['admin'])->group(function () {
    Route::middleware(['adminRole:1'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashbordController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/signup',[AdminController::class,'AdminSignup'])->name('admin.signup');
    Route::post('admin/signup/store', [AdminController::class, 'AdminSignupStore'])->name('admin.signup.store');

    Route::resource('division', DivisionController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('subdistrict', SubDistrictController::class);
    Route::resource('unions', UnionsController::class);
    Route::resource('diagnostic', DiagnostichospitalController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('pathology', PathologieController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('pharmacy', PharmacieController::class);
    Route::resource('ambulance', AmbulanceController::class);


    });

    Route::middleware(['adminRole:2'])->prefix('subAdmin')->group(function () {
        Route::get('/dashboard', [SubAdminController::class, 'index'])->name('subadmin.dashboard');
        Route::get('/employee', [SubAdminController::class, 'Employee'])->name('Employee.add');
        Route::post('/employee/store', [SubAdminController::class, 'EmployeeStore'])->name('Employee.store');
        Route::get('/employee/update', [SubAdminController::class, 'EmployeeUpdate'])->name('employee.edit');
        Route::post('/employee/destroy/{id}', [SubAdminController::class, 'EmployeeDestroy'])->name('employee.destroy');
    });

    Route::middleware(['adminRole:3'])->prefix('employee')->group(function () {
        Route::get('/dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
        Route::get('/active', [EmployeeController::class, 'Active'])->name('employee.active');
        Route::post('/user/active/{id}', [EmployeeController::class, 'UserActive'])->name('user.active');
        Route::post('/user/unactive/{id}', [EmployeeController::class, 'UserUnActive'])->name('user.unactive');

        Route::get('/unions/{union_id?}', [EmployeeController::class, 'Unions'])->name('employee.unions');

    });

    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
