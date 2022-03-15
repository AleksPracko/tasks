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
    return view('welcome');
});

// show all tasks
Route::get('/task', [TaskController::class, 'index']);
// Show form for creating tasks
Route::get('/task/create', [TaskController::class, 'create']);
// show single task
Route::get('/task/{task}', [UserController::class, 'show']);
// store task into db
Route::post('/task', [UserController::class, 'store']);
// show form for editing tasks
Route::get('/task/{task}/edit', [UserController::class, 'edit']);
// update task into DB
Route::put('/task/{task}', [UserController::class, 'update']);
// delete task
Route::delete('/task/{task}', [UserController::class, 'destroy']);

