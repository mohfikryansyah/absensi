<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DevisiController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Staff\DashboardController;
use App\Http\Controllers\Admin\DashboardController as DashboardAdminController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:staff'])->prefix('staff')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('staff.dashboard');
});

Route::get('/dashboard', [DashboardAdminController::class, 'index'])->middleware(['auth', 'role:admin'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'role:admin'])->name('dashboard');

Route::resource('/divisi', DevisiController::class);

Route::middleware('auth')->group(function () {
    Route::resource('/attendances', AttendanceController::class)->except(['export']);
    // Route::delete('/attendances', [AttendanceController::class, 'destroy'])->name('attendances.destroy');
    Route::put('/attendance/clock-out', [AttendanceController::class, 'clock_out'])->name('attendances.clockout');
    Route::resource('/office', OfficeController::class)->except('index');
    Route::resource('/employees', EmployeeController::class);
    Route::resource('/devisi', DevisiController::class);
    Route::get('/export-attendances', [AttendanceController::class, 'export'])->name('attendances.export');
});

Route::get('/office', [OfficeController::class, 'index'])->name('office.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware('auth')->group(function () {
// });


require __DIR__.'/auth.php';
