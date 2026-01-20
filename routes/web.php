<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminSubjectController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\AdminProfilController;
use App\Http\Controllers\admin\AdminKontakController;
use App\Http\Controllers\admin\AdminLoginController;

// ==================== USER ROUTES ====================
Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [ContactController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);

// ==================== ADMIN ROUTES ====================
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/profil', [AdminProfilController::class, 'index']);
Route::get('/admin/kontak', [AdminKontakController::class, 'index']);

Route::get('/admin/student', [AdminStudentController::class, 'index'])->name('student.index');
Route::post('admin/student', [AdminStudentController::class, 'store'])->name('student.store');
Route::put('/admin/students/{student}', [AdminStudentController::class, 'update'])->name('student.update');
Route::delete('admin/student/{student}', [AdminStudentController::class, 'destroy'])->name('student.destroy');

Route::get('/guardian', [GuardianController::class, 'index']) ;


Route::get('/admin/guardians', [AdminGuardianController::class, 'index'])->name('guardians.index');
Route::post('/admin/guardians', [AdminGuardianController::class, 'store'])->name('guardians.store');
Route::put('/admin/guardians/{guardian}', [AdminGuardianController::class, 'update'])->name('guardians.update');
Route::delete('/admin/guardians/{guardian}', [AdminGuardianController::class, 'destroy'])->name('guardians.destroy');

Route::get('/classroom', [ClassroomController::class, 'index']);

Route::get('/admin/classrooms', [AdminClassroomController::class, 'index'])->name('classroom.index');
Route::post('/admin/classrooms', [AdminClassroomController::class, 'store'])->name('classroom.store');
Route::put('/admin/classrooms/{classroom}', [AdminClassroomController::class, 'update'])->name('classroom.update');
Route::delete('/admin/classrooms/{classroom}', [AdminClassroomController::class, 'destroy'])->name('classroom.destroy');

Route::get('/teacher', [TeacherController::class, 'index']);

Route::get('/admin/teacher', [AdminTeacherController::class, 'index'])->name('teacher.index');
Route::post('/admin/teacher', [AdminTeacherController::class, 'store'])->name('teacher.store');
Route::put('/admin/teacher/{teacher}', [AdminTeacherController::class, 'update'])->name('teacher.update');
Route::delete('/admin/teacher/{teacher}', [AdminTeacherController::class, 'destroy'])->name('teacher.destroy');

Route::get('/subject', [SubjectController::class, 'index']);

Route::get('/admin/subject', [AdminSubjectController::class, 'index'])->name('subject.index');
Route::post('/admin/subject', [AdminSubjectController::class, 'store'])->name('subject.store');
Route::put('/admin/subject/{subject}', [AdminSubjectController::class, 'update'])->name('subject.update');
Route::delete('/admin/subject/{subject}', [AdminSubjectController::class, 'destroy'])->name('subject.destroy');
