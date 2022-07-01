<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\TaskController;

use App\Http\controllers\ViewController;

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

Route::get('/task', [TaskController::class, 'index'])->name('task');


Route::get('/all_task',[TaskController::class, 'seeTask'])->name('viewTask');

Route::get('/create_task', [TaskController::class, 'create'])->name('storeTask');

Route::post('/create_task', [TaskController::class, 'store'])->name('saveTask');

Route::get('/task/delete/{id}', [TaskController::class, 'destroy'])->name('destroy');

Route::get('/update/{id}', [TaskController::class, 'update'])->name('edit');

Route::post('/task/update/{id}', [TaskController::class, 'save'])->name('change');

Route::get('/task/completed/{id}', [TaskController::class, 'completed'])->name('completed');



