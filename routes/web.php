<?php

use App\Http\Controllers\ApprenantBriefsController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\BriefController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\TaskController;
use App\Models\ApprenantBriefs;
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


// -------------------------------- Project_3 Routes ----------------------------------

Route::get('/', [PromotionController::class, 'index'])->name('promotion.index');
Route::get('/', [PromotionController::class, 'getPromotions'])->name('promotion.get');
Route::get('/add_promotion', [PromotionController::class, 'addPromotion'])->name('promotion.add');
Route::post('/add_promotion', [PromotionController::class, 'submitPromotion'])->name('promotion.submit');
Route::get('/delete_promotion/{id}', [PromotionController::class, 'deletePromotion'])->name('promotion.delete');
Route::get('/gestion_briefs', [BriefController::class, 'index'])->name('brief.index');
Route::get('/gestion_briefs', [BriefController::class, 'getBriefs'])->name('briefs.get');
Route::post('/gestion_briefs', [BriefController::class, 'submitbrief'])->name('brief.submit');
Route::get('/gestion_brief/{id}', [BriefController::class, 'getBrief'])->name('brief.get');
Route::get('/add_brief', [BriefController::class, 'addBrief'])->name('brief.add');
Route::post('/add_brief', [BriefController::class, 'submitbrief'])->name('brief.submit');
Route::get('/delete_brief/{id}', [BriefController::class, 'deleteBrief'])->name('brief.delete');
Route::get('/gestion_apprenant', [ApprenantController::class, 'index'])->name('apprenant.index');
Route::get('/gestion_apprenant/{id?}', [ApprenantController::class, 'getApprenant'])->name('apprenant.get');
Route::post('/gestion_apprenant', [ApprenantController::class, 'submitApprenant'])->name('apprenant.submit');
Route::get('/add_apprenant', [ApprenantController::class, 'addApprenant'])->name('apprenant.add');
Route::get('/delete_apprenant/{id}', [ApprenantController::class, 'deleteApprenant'])->name('apprenant.delete');
Route::post('/edit_apprenant/{id}', [ApprenantController::class, 'updateApprenant'])->name('apprenant.update');
Route::get('/gestion_task', [TaskController::class, 'index'])->name('task.index');
Route::get('/gestion_task/{id}', [TaskController::class, 'getTask'])->name('task.get');
Route::get('/add_task', [TaskController::class, 'addTask'])->name('task.add');
Route::post('/add_task', [TaskController::class, 'submitTasks'])->name('task.submit');
Route::post('/gestion_brief/{id}', [BriefController::class, 'updateBrief'])->name('brief.update');
Route::get('/delete_task/{id}', [TaskController::class, 'deleteTask'])->name('task.delete');
Route::post('/edit_task/{id}', [TaskController::class, 'updateTask'])->name('task.update');
Route::get('/edit_task/{id}', [TaskController::class, 'editTask'])->name('task.edit');
// Route::get('/gestion_briefs/{    ', [TaskController::class, 'getBriefsToTask'])->name('getbriefs.task');

Route::get('/assigner', [ApprenantBriefsController::class, 'index']);


