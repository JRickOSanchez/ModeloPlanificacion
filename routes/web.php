<?php

use App\Http\Controllers\Acentos\AcentosSemanasController;
use App\Http\Controllers\Acentos\AcentosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Macros\MacroController;
use App\Http\Controllers\MacroView\EditarMacroViewController;
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

Route::view('/', 'login');
Route::view('/dashboard', 'dashboard')->name('dashboard');

// CREAR MACRO
Route::view('/crear-macro', 'crear-macro')->name('macro.crear');

// EDITAR MACRO - VISTA
Route::get('/editar-macro/{id}/general', [EditarMacroViewController::class, 'show'])
     ->name('macro.editar.generales');

Route::get('/editar-macro/{id}/acentos', [EditarMacroViewController::class, 'acentos'])
     ->name('macro.editar.acentos');

// ACENTOS
Route::get('/editar-macro/{id}/acento/crear', [AcentosController::class, 'view'])
     ->name('macro.acento.crear');

Route::post('/editar-macro/{id}/acento/crear', [AcentosController::class, 'action'])
     ->name('api.macro.acento.crear');


// ACENTOS SEMANAS
Route::get('/editar-macro/{id}/acento/crear/semanas/{nombre}/{semanas}', [AcentosSemanasController::class, 'view'])
     ->name('macro.acento.crear.semanas');

Route::post('/editar-macro/{id}/acento/crear/semanas/{nombre}/{semanas}', [AcentosSemanasController::class, 'action'])
     ->name('macro.acento.crear.semanas.guardar');


// -------- API -------- //
Route::post('login', [LoginController::class, 'authenticate']);

Route::prefix('macro/')->controller(MacroController::class)->group(function () {
    Route::post('crear', 'store');
});