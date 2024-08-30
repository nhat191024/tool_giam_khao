<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DiemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DiemController::class, 'addScreen'])->name('diem.add_screen')->middleware('checkAdminLogin');;

// admin
Route::get('/user/list', [UserController::class, 'list'])->name('admin.list')->middleware('checkAdminLogin');
Route::get('/user/add', [UserController::class, 'add'])->name('admin.add')->middleware('checkAdminLogin');
Route::get('/feedback/', [DiemController::class, 'addScreen'])->name('diem.add_screen')->middleware('checkAdminLogin');
Route::get('/feedback/total', [DiemController::class, 'totalScreen'])->name('diem.total_screen')->middleware('checkAdminLogin');
Route::post('/feedback/add', [DiemController::class, 'addScore'])->name('diem.add_score')->middleware('checkAdminLogin');
Route::get('/feedback/reset', [DiemController::class, 'resetScore'])->name('diem.reset_score')->middleware('checkAdminLogin');
Route::get('/feedback/reset-all', [DiemController::class, 'resetAllScore'])->name('diem.reset_all_score')->middleware('checkAdminLogin');
Route::post('/feedback/confirm-reset-all', [DiemController::class, 'confirmResetAllScore'])->name('diem.confirm_reset_all')->middleware('checkAdminLogin');
Route::get('/client/{id}', [ClientController::class, 'show'])->name('client.show');

// client
Route::get('/login', [UserController::class, 'showLogin'])->name('client.showlogin');
Route::post('/login', [UserController::class, 'login'])->name('client.login');
Route::get('/logout', [UserController::class, 'logout'])->name('client.logout')->middleware('checkAdminLogin');
