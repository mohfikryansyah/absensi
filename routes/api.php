<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisiController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user()->load(['attendances', 'employees']);
});

Route::post('/login', [AuthController::class, 'login'])
->middleware('guest');
// ->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/attendances', [AttendanceController::class, 'store']);
    Route::post('/attendances/clock-out', [AttendanceController::class, 'clock_out']);
    Route::patch('/employees/{employee}', [EmployeeController::class, 'update']);
    Route::get('/attendances/status', [AttendanceController::class, 'statusAttendance']);
    Route::get('/devisi/{id}', [DevisiController::class, 'getDevisi']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::get('/location', [OfficeController::class, 'getLocation']);
