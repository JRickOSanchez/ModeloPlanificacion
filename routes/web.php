<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Macros\MacroController;
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

// API
Route::post('login', [LoginController::class, 'authenticate']);

Route::prefix('macro/')->controller(MacroController::class)->group(function(){
    Route::post('crear', 'store');
});
