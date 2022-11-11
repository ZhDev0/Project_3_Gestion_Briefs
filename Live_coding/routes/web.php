<?php

use App\Http\Controllers\BriefController;
use App\Http\Controllers\TacheController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BriefController::class, 'index'])->name('brief.index');
Route::get('/add_brief', [BriefController::class, 'addBrief']);
Route::post('/add_brief', [BriefController::class, 'submitBrief'])->name('brief.submit');
Route::get('/edit_brief/{id}', [BriefController::class, 'editBrief'])->name('brief.edit');
Route::post('/edit_brief/{id}', [BriefController::class, 'updateBrief'])->name('brief.update');
Route::get('/deleto/{id}', [BriefController::class, 'destroyBrief'])->name('brief.delete');
Route::get('/add_task', [TacheController::class, 'index'])->name('task.index');
Route::post('/add_task', [TacheController::class, 'submitTask'])->name('task.submit');
Route::get('/edit_task/{id}', [TacheController::class, 'editTask'])->name('task.edit');
Route::post('/edit_task/{id}', [TacheController::class, 'updateTask'])->name('task.update');
Route::get('/delete_task/{id}', [TacheController::class, 'destroyTask'])->name('task.delete');
