<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;

// Main Website Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/api/featured-jobs', [HomeController::class, 'getFeaturedJobs']);
Route::get('/api/top-companies', [HomeController::class, 'getTopCompanies']);

// Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Panel Routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/jobs', [AdminController::class, 'jobs'])->name('admin.jobs');
Route::get('/admin/companies', [AdminController::class, 'companies'])->name('admin.companies');
Route::get('/admin/applications', [AdminController::class, 'applications'])->name('admin.applications');
Route::get('/admin/roles', [AdminController::class, 'roles'])->name('admin.roles');

// Admin API Routes
Route::get('/admin/api/dashboard', [AdminController::class, 'getDashboardData']);
Route::get('/admin/api/users', [AdminController::class, 'getUsersData']);
Route::get('/admin/api/jobs', [AdminController::class, 'getJobsData']);

// Error handling
Route::fallback(function () {
    return view('errors.error');
});