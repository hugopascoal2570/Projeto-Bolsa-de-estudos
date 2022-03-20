<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ResponsibleController;
use App\Http\Controllers\ScholarShipController;
use App\Models\ScholarShip;

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

Route::prefix('/')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'loginAction']);
    Route::post('/logout', [AdminController::class, 'logout']);
    Route::get('/painel', [AdminController::class, 'index']);
    Route::get('/register', [AdminController::class, 'register']);
    Route::post('/register', [AdminController::class, 'registerAction']);


    Route::get('/', [HomeController::class, 'index']);
    Route::get('/cursos', [HomeController::class, 'cursos'])->name('cursos');
    Route::get('/curso/{slug}', [HomeController::class, 'register']);
    Route::post('/cadastro', [HomeController::class, 'registerAction'])->name('cadastro');
    Route::get('/area', [HomeContrroller::class, 'loginAction'])->name('area');
    Route::get('/etapaDois', [ResponsibleController::class, 'etapaDois'])->name('etapaDois');
    Route::post('/etapaDois', [ResponsibleController::class, 'etapaDoisAction'])->name('etapaDois');

    Route::resource('painel/cursos', CoursesController::class);
    Route::get('painel/bolsas', [ScholarshipController::class, 'index']);
    Route::get('viewScholarship/{id}', [ScholarShipController::class, 'viewScholarship'])->name('view.scholarship');
});

/*
Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'loginAction']);
    Route::post('/logout', [AdminController::class, 'logout']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/register', [AdminController::class, 'register']);
    Route::post('/register', [AdminController::class, 'registerAction']);


    
    
});
*/