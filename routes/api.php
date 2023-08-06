<?php

use App\Http\Controllers\AssigneeController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Repositories\AssigneeRepository;
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
Route::get('departments/{id}', [DepartmentController::class, 'show']);
Route::post('departments', [DepartmentController::class, 'store']);


Route::get('assignees', [AssigneeController::class, 'index']);
Route::get('assignees/{id}', [AssigneeController::class, 'show']);
Route::post('assignees', [AssigneeController::class, 'store']);


Route::get('assignments', [AssignmentController::class, 'index']);
Route::get('assignments/{id}', [AssignmentController::class, 'show']);
Route::post('assignments', [AssignmentController::class, 'store']);


Route::get('user', [AuthController::class, 'user']);
