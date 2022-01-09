<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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
Route::get('/',[TasksController::class,'index']);
Route::get('/createTask',[TasksController::class,'createTaskForm'])->name('createTask');
Route::post('/createNewTask',[TasksController::class,'createNewTask'])->name('createNewTask');
Route::get('/editTask/{id}',[TasksController::class,'editTask'])->name('editTask');
Route::post('/submitEditTask',[TasksController::class,'submitEdit'])->name('submitEdit');
Route::get('/deleteTask/{id}',[TasksController::class,'deleteTask'])->name('deleteTask');
Route::get('/CompletedTasks',[TasksController::class,'completedTasks'])->name('CompletedTasks');
Route::get('/PendingTasks',[TasksController::class,'pendingTasks'])->name('PendingTasks');
