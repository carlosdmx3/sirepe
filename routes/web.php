<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller;
use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ClavesPresupuestalesController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\ReporteController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('datos-escuelas', [App\Http\Controllers\EscuelaController::class, 'index'])->name('escuela');

Route::get('datos-personal', [App\Http\Controllers\PersonalController::class, 'index'])->name('personal');

Route::get('datos-claves', [App\Http\Controllers\ClavesPresupuestalesController::class, 'index'])->name('claves');

Route::get('horario', [App\Http\Controllers\HorariosController::class, 'index'])->name('horario');

Route::get('plantilla', [App\Http\Controllers\PlantillaController::class, 'index'])->name('plantilla');

Route::get('reporte', [App\Http\Controllers\ReporteController::class, 'index'])->name('reporte');