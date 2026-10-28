<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCalendarController;
use App\Http\Controllers\AdminTableController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\AdminSweetAlertController;
use App\Http\Controllers\AdminLoginController;

// Routes untuk Landing Page (Template Restoran - 6 Halaman)
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/about', [AboutController::class, 'index'])->name('About');
Route::get('/service', [ServiceController::class, 'index'])->name('Service');
Route::get('/menu', [MenuController::class, 'index'])->name('Menu');
Route::get('/booking', [BookingController::class, 'index'])->name('Booking');
Route::get('/team', [TeamController::class, 'index'])->name('Team');

// Routes untuk Admin Dashboard (Template Upcube - 6 Halaman)
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('AdminDashboard');
Route::get('/admin-calendar', [AdminCalendarController::class, 'index'])->name('AdminCalendar');
Route::get('/admin-table', [AdminTableController::class, 'index'])->name('AdminTable');
Route::get('/admin-form', [AdminFormController::class, 'index'])->name('AdminForm');
Route::get('/admin-sweet-alert', [AdminSweetAlertController::class, 'index'])->name('AdminSweetAlert');
Route::get('/admin-login', [AdminLoginController::class, 'index'])->name('AdminLogin');
