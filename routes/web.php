<?php

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
Route::view('/dashboard', 'dashboard');
Route::view('/crear-macro', 'crear-macro');
Route::get('/editar-macro/{id}', [EditarMacroViewController::class, 'show']);

// API
Route::post('login', [LoginController::class, 'authenticate']);

Route::prefix('macro/')->controller(MacroController::class)->group(function(){
    Route::post('crear', 'store');
});
