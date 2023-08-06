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
Route::put('departments/{id}', [DepartmentController::class, 'update']);
Route::delete('departments/{id}', [DepartmentController::class, 'destroy']);


Route::get('assignees', [AssigneeController::class, 'index']);
Route::get('assignees/{id}', [AssigneeController::class, 'show']);
Route::post('assignees', [AssigneeController::class, 'store']);
Route::put('assignees/{id}', [AssigneeController::class, 'update']);
Route::delete('assignees/{id}', [AssigneeController::class, 'destroy']);


Route::get('assignments', [AssignmentController::class, 'index']);
Route::get('assignments/{id}', [AssignmentController::class, 'show']);
Route::post('assignments', [AssignmentController::class, 'store']);
Route::put('assignments/{id}', [AssignmentController::class, 'update']);
Route::delete('assignments/{id}', [AssignmentController::class, 'destroy']);


Route::get('user', [AuthController::class, 'user']);
