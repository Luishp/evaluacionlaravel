<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

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




Route::get('/', [ProyectoController::class, 'index']);

//PROYECTOS
Route::get('/proyecto', [ProyectoController::class, 'index'])->name('proyecto.index');
Route::get('/proyecto/create', [ProyectoController::class, 'create'])->name('proyecto.create');
Route::post('/proyecto/store', [ProyectoController::class, 'store'])->name('proyecto.store');
Route::get('/proyecto/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyecto.edit');
Route::put('/proyecto/{proyecto}', [ProyectoController::class, 'update'])->name('proyecto.update');
Route::get('/proyecto/{proyecto}', [ProyectoController::class, 'destroy'])->name('proyecto.destroy');

Route::get('/pdf/{proyecto}', [ProyectoController::class, 'getPDF'])->name('proyecto.pdf');