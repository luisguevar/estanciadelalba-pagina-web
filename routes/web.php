<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CulqiControllerr;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroReclamacionController;
use App\Http\Controllers\NosotrosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/reservas', [HomeController::class, 'reservas'])->name('reserva');
Route::get('/reservar', [HomeController::class, 'reservar'])->name('reservar');
Route::get('/habitaciones', [HabitacionesController::class, 'index']);
Route::get('/nosotros', [NosotrosController::class, 'index']);
Route::get('/contactanos', [ContactanosController::class, 'index']);
Route::get('/reclamaciones', [LibroReclamacionController::class, 'index']);
/* Route::get('/culqi', [CulqiControllerr::class, 'index']); */
// Route::view('/', 'mantenimiento');