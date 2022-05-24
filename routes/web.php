<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ResponsibleController;
use App\Http\Controllers\ScholarShipController;
use App\Http\Controllers\SecretariesController;

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

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/cursos', [HomeController::class, 'cursos'])->name('cursos');
    Route::get('/curso/{id}', [HomeController::class, 'register']);

    Route::post('/cadastro', [HomeController::class, 'registerAction'])->name('cadastro');
    Route::get('/cadastroEtapa2', [HomeController::class, 'etapaDois'])->name('cadastroEtapa2');
    Route::post('/cadastroEtapa2', [HomeController::class, 'EtapaDoisAction'])->name('cadastroEtapa2');

    //responsaveis
    Route::get('/etapaDois', [ResponsibleController::class, 'etapaDois'])->name('etapaDois');
    Route::post('/etapaDois', [ResponsibleController::class, 'etapaDoisAction'])->name('etapaDois');

    //painel
    Route::resource('painel/cursos', CoursesController::class);
    Route::get('painel/bolsas', [ScholarshipController::class, 'index']);
    Route::get('painel/secretarios', [SecretariesController::class, 'index']);
    Route::get('secretarios', [SecretariesController::class, 'add'])->name('secretarios.add');

    Route::post('adicionarSecretarios', [SecretariesController::class, 'addAction'])->name('secretatios.addAction');
    Route::get('visualizarBolsas/{id}', [ScholarShipController::class, 'viewScholarship'])->name('visualizarBolsas');
    Route::get('visualizarResponsaveis/{id}', [ScholarShipController::class, 'viewResponsible'])->name('visualizarResponsaveis');
});
