<?php

use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\DeleteTaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpdateTaskController;
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
Route::get('/', [HomeController::class, 'test'])->name('home');
Route::post('/create', [CreateTaskController::class, 'store'])->name('tasks.create');
Route::get('/edit/show/{id}', [UpdateTaskController::class, 'show_edit'])->name('tasks.edit.show');
Route::put('/edit/{id}', [UpdateTaskController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [DeleteTaskController::class, 'deletar'])->name('tasks.delete');
