<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/entrega_equipos', [App\Http\Controllers\EntregaEquipoController::class, 'index'])->name('entrega_equipos');
Route::get('/tareas', [App\Http\Controllers\TareaController::class, 'index'])->name('tarea');
Route::get('/empleados', [App\Http\Controllers\EmpleadoController::class, 'index'])->name('empleado');
Route::delete('/empleados/{empleado}', [App\Http\Controllers\EmpleadoController::class, 'destroy'])->name('empleados.destroy');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/vehiculos', [App\Http\Controllers\VehiculoController::class, 'index'])->name('vehiculo');
