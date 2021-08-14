<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\DeleteTaskController;
use App\Http\Controllers\UpdateTaskController;
use App\Http\Controllers\TaskUpdateController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [TaskController::class, 'view'])->name('home');
Route::post('/create', [TaskController::class, 'store'])->name('tasks.create');
Route::get('/edit/show/{id}', [TaskController::class, 'show_edit'])->name('tasks.edit.show');
Route::put('/edit/{id}', [TaskController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [TaskController::class, 'deletar'])->name('tasks.delete');
Route::get('/updated-task/{id}', [TaskController::class, 'updated'])->name('task.update');
