<?php

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

Route::get('/', [DiemController::class, 'addScreen']);

Route::get('/user/list', [UserController::class, 'list'])->name('admin.list');
Route::get('/user/add', [UserController::class, 'add'])->name('admin.add');
Route::get('/feedback/', [DiemController::class, 'addScreen'])->name('diem.add_screen');
Route::post('/feedback/add', [DiemController::class, 'addScore'])->name('diem.add_score');
