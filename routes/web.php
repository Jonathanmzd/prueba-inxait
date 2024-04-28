<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/resultado', [ResultadoController::class, 'index'])->name('resultado.index');
Route::get('registro', [RegistroController::class, 'index'])->name('registro.index');
Route::post('registro', [RegistroController::class, 'store'])->name('registro.store');
Route::get('/get-cities/{department}', [RegistroController::class, 'getCitiesByDepartment']);
Route::get('/export', [ResultadoController::class, 'export'])->name('export');
