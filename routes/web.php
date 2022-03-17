<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ScholarShipController;
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

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'loginAction']);
    Route::post('/logout', [AdminController::class, 'logout']);
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/register', [AdminController::class, 'register']);
    Route::post('/register', [AdminController::class, 'registerAction']);
    Route::resource('/cursos', CoursesController::class);
    Route::resource('/scholarship', ScholarshipController::class);
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/cursos', [HomeController::class, 'contato']);
