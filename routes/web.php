<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PaperContoller;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use App\Http\Controllers\Student\PaperController;
use App\Http\Middleware\StudentMiddleware;

Route::get('/',[HomeController::class,'index'])->name('index');

Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'login_check'])->name('login');

Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'register_new'])->name('register');
// email check
Route::post('email/check',[AuthController::class,'Emailcheck'])->name('email.check');



// Admin panel
// logout admin.logout

Route::middleware([AdminMiddleware::class])->group(function () {
    // Admin
    Route::get('admin/logout',[DashboardController::class,'logout'])->name('admin.logout');
    Route::get('admin/dashboad',[DashboardController::class,'index'])->name('admin.dashboard');

    // Admin Profile
    Route::get('admin/profile',[ProfileController::class,'profile'])->name('admin.profile');
    Route::post('admin/profile/update',[ProfileController::class,'update'])->name('admin.profile.update');
    Route::post('admin/profile/password',[ProfileController::class,'password'])->name('admin.profile.password');

    // paper section
    Route::get('admin/paper/list',[PaperContoller::class,'list'])->name('admin.paper.list');
    Route::get('admin/paper/create',[PaperContoller::class,'create'])->name('admin.paper.create');
    Route::post('admin/paper/store',[PaperContoller::class,'store'])->name('admin.paper.store');
    Route::get('admin/paper/edit/{id}',[PaperContoller::class,'edit'])->name('admin.paper.edit');
    Route::post('admin/paper/update',[PaperContoller::class,'update'])->name('admin.paper.update');
    Route::get('admin/paper/delete/{id}',[PaperContoller::class,'delete'])->name('admin.paper.delete');

    // question section
    Route::get('admin/question/list/{id}',[QuestionController::class,'list'])->name('admin.question.list');
    Route::get('admin/question/add/{id}',[QuestionController::class,'add'])->name('admin.question.add');
    Route::post('admin/question/store',[QuestionController::class,'store'])->name('admin.question.store');
    Route::get('admin/question/edit/{id}',[QuestionController::class,'edit'])->name('admin.question.edit');
    Route::post('admin/question/update',[QuestionController::class,'update'])->name('admin.question.update');
    Route::get('admin/question/delete/{id}',[QuestionController::class,'delete'])->name('admin.question.delete');

    // Student section
    Route::get('admin/student/list',[StudentController::class,'list'])->name('admin.student.list');
    Route::get('admin/student/edit/{id}',[StudentController::class,'edit'])->name('admin.student.edit');
    Route::post('admin/student/update',[StudentController::class,'update'])->name('admin.student.update');
    Route::get('admin/student/delete/{id}',[StudentController::class,'delete'])->name('admin.student.delete');

});
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::middleware([StudentMiddleware::class])->group(function () {
    Route::get('admin/logout',[DashboardController::class,'logout'])->name('admin.logout');
    Route::get('student/dashboard',[StudentDashboardController::class,'index'])->name('student.dashboard');

    Route::get('student/paper/list',[PaperController::class,'list'])->name('student.paper.list');
    Route::get('student/paper/exam/{id}',[PaperController::class,'exam'])->name('student.paper.exam');


});
