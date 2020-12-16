<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\ConsultasController;

// INDEX
Route::get('/index',[IndexController::class,'index']);

// PACIENTES
Route::get('/pacientes', [PacientesController::class,'index']);
Route::get('/pacientes/create', [PacientesController::class,'create']);
Route::post('/pacientes', [PacientesController::class,'store'])->name('pacientes.store');
Route::get('/pacientes/{id}', [PacientesController::class,'show']);
Route::get('/pacientes/{id}/edit', [PacientesController::class,'edit']);
Route::patch('/pacientes/{id}', [PacientesController::class,'update'])->name('pacientes.update');
Route::get('/pacientes/{id}/delete', [PacientesController::class,'delete']);
Route::delete('/pacientes/{id}', [PacientesController::class,'destroy'])->name('pacientes.destroy');

// CONSULTAS
Route::get('/consultas', [ConsultasController::class,'index']);
Route::get('/consultas/create', [ConsultasController::class,'create']);
Route::post('/consultas', [ConsultasController::class,'store'])->name('consultas.store');
Route::get('/consultas/{id}', [ConsultasController::class,'show']);
Route::get('/consultas/{id}/edit', [ConsultasController::class,'edit']);
Route::patch('/consultas/{id}', [ConsultasController::class,'update'])->name('consultas.update');
Route::get('/consultas/{id}/delete', [ConsultasController::class,'delete']);
Route::delete('/consultas/{id}', [ConsultasController::class,'destroy'])->name('consultas.destroy');