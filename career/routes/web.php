<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('/');
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('registration', function () {
    return view('registration');
})->name('registration');
Route::get('trainer', function () {
    return view('trainer');
})->name('trainer');
Route::get('/student', function () {
    return view('student')->name('student');
});
Route::get('/instructor', function () {
    return view('instructor');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/student', function () {
    return view('student');
    
})->name('student');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
Route::get('/destination', function () {
    return view('destination');
})->name('destination');
Route::get('adminregistration',[App\Http\Controllers\AdminRegistrationController::class,'index'])->name('adminregistration'); 
Route::post('student',[App\Http\Controllers\GuestController::class,'students'])->name('student');
Route::post('college',[App\Http\Controllers\GuestController::class,'colleges'])->name('college');
Route::post('login',[App\Http\Controllers\GuestController::class,'postLogin'])->name('postlogin');
Route::get('logout',[App\Http\Controllers\GuestController::class,'logout'])->name('logout'); 
Route::post('postadminform',[App\Http\Controllers\AdminRegistrationController::class,'save'])->name('postadminform');
    

Route::group(['middleware' => ['auth','prevent-back-history']],function(){

    Route::get('/adminhome', function () {
        return view('admin/index');
    })->name('adminhome');
    Route::get('/search', function () {
        return view('search');
    })->name('search');
    Route::get('admin.viewcollege', function () {
        return view('admin/viewcollege');
    })->name('admin.viewcollege');
    Route::get('admin.viewstudent', function () {
        return view('admin/viewstudent');
    })->name('admin.viewstudent');
    
    Route::get('admin.viewmorecollege', function () {
        return view('admin/viewmorecollege');
    })->name('admin.viewmorecollege');
    
    Route::get('admin.addcourses',function () {
        return view('admin/addcourses');
    })->name('admin.addcourses');

    Route::get('admin.addinstructor',function () {
        return view('admin/addinstructor');
    })->name('admin.addinstructor');
    
    Route::get('admin.change', function () {
        return view('admin/change');
    })->name('admin.change');
    
    Route::get('admin.addjob',[App\Http\Controllers\AdminController::class,'getjobs'])->name('admin.addjob'); 
    Route::post('admin.addjob',[App\Http\Controllers\AdminController::class,'getjob'])->name('admin.addjob');
    Route::post('admin.addjobs',[App\Http\Controllers\AdminController::class,'deletejob'])->name('admin.deletejob');
    Route::post('admin.updatepassword',[App\Http\Controllers\AdminController::class,'updatepassword'])->name('admin.updatepassword');
    Route::get('admin.addcourses', [App\Http\Controllers\AdminController::class, 'addcourses'])->name('admin.addcourses');
    Route::post('admin.addcourses', [App\Http\Controllers\AdminController::class, 'addcourse'])->name('admin.addcourses');
    Route::post('admin.addcourse',[App\Http\Controllers\AdminController::class,'deletecourse'])->name('admin.deletecourse');
    Route::get('admin.viewstudent', [App\Http\Controllers\AdminController::class, 'viewstudent'])->name('admin.viewstudent');
    Route::get('admin.viewmorestudent/{id}',[App\Http\Controllers\AdminController::class,'getstudent'])->name('admin.viewmorestudent');
    Route::post('admin.viewstudent',[App\Http\Controllers\AdminController::class,'deletestudent'])->name('admin.deletestudent');
    Route::get('admin.viewcollege',[App\Http\Controllers\AdminController::class,'viewcollege'])->name('admin.viewcollege'); 
    Route::get('admin.viewmorecollege/{id}',[App\Http\Controllers\AdminController::class,'getcollege'])->name('admin.viewmorecollege');
    //Route::get('productdetail/{id}',[App\Http\Controllers\GuestController::class,'productdetail'])->name('productdetail');
    Route::post('admin.deletecollege',[App\Http\Controllers\AdminController::class,'deletecollege'])->name('admin.deletecollege');
    //updatecollegestatus
    Route::post('admin.updatecollegestatus',[App\Http\Controllers\AdminController::class,'updatecollegestatus'])->name('admin.updatecollegestatus');
    Route::post('admin.updatestudentstatus',[App\Http\Controllers\AdminController::class,'updatestudentstatus'])->name('admin.updatestudentstatus');
    Route::get('admin.addinstructor',[App\Http\Controllers\AdminController::class,'addinstructors'])->name('admin.addinstructor');
    Route::post('admin.addinstructor',[App\Http\Controllers\AdminController::class,'addinstructor'])->name('admin.addinstructor');
    Route::post('admin.addinstructors',[App\Http\Controllers\AdminController::class,'deleteinstructor'])->name('admin.deleteinstructor');
});