<?php

use App\Http\Controllers\Acentos\AcentosController;
use App\Http\Controllers\AcentoView\AcentoViewController;
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
Route::view('/crear-macro', 'crear-macro')->name('macro.crear');
Route::get('/editar-macro/{id}', [EditarMacroViewController::class, 'show'])
     ->name('macro.editar');
Route::get('/editar-macro/{id}/acentos', [EditarMacroViewController::class, 'acentos'])
     ->name('macro.editar.acentos');

// ACENTOS

Route::get('/macro/{id}/acento/crear', [AcentoViewController::class, 'paso1'])
    ->name('macro.acento.crear.1');

Route::post('macro/{id}/acento/crear/semanas', [AcentosController::class, 'paso1'])
     ->name('macro.acento.crear.2');

// -------- API -------- //
Route::post('login', [LoginController::class, 'authenticate']);

Route::prefix('macro/')->controller(MacroController::class)->group(function () {
    Route::post('crear', 'store');
});

Route::post('macro/{id}/acento/paso-2/{nombre}/{semanas}', [AcentosController::class, 'paso2'])
     ->name('api.macro.acento.paso-2');