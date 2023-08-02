<?php

use App\Http\Controllers\AssigneeController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Repositories\AssignmentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('departments', [DepartmentController::class, 'index']);

Route::get('assignees', [AssigneeController::class, 'index']);

Route::get('assignments', [AssignmentController::class, 'index']);

Route::get('user', [AuthController::class, 'user']);
