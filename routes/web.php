<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AulaController;
use App\Models\Aula;

Route::get('/', function () {
    return view('welcome');
});
//rutas para profesores
Route::get('/profesor/{id}', [ProfesorController::class, 'show'])->name('profesor.show');
Route::get('/profesors', [App\Http\Controllers\ProfesorController::class, 'index'])->name('profesor.index');
Route::get('/profesor', [ProfesorController::class, 'create'])->name('profesor.create');
Route::post('/profesor', [ProfesorController::class, 'store'])->name('profesor.store');
Route::get('/profesor/{id}/edit', [App\Http\Controllers\ProfesorController::class, 'edit'])->name('profesor.edit');
Route::put('/profesor/{id}', [App\Http\Controllers\ProfesorController::class, 'update'])->name('profesor.update');
Route::delete('/profesor/{nombre}', [App\Http\Controllers\ProfesorController::class, 'destroy'])->name('profesor.destroy');
//rutas para aulas
Route::get('/aulass', [AulaController::class, 'index'])->name('aula.index');
Route::post('/aula', [AulaController::class, 'store'])->name('aula.store');
Route::get('/aulac', [AulaController::class, 'create'])->name('aula.create');
Route::get('/aula/{id}/edit', [App\Http\Controllers\AulaController::class, 'edit'])->name('aula.edit');
Route::put('/aula/{id}', [App\Http\Controllers\AulaController::class, 'update'])->name('aula.update');
Route::delete('/aula/{id}', [App\Http\Controllers\AulaController::class, 'destroy'])->name('aula.destroy');
Route::get('/aula/{id}', [App\Http\Controllers\AulaController::class, 'show'])->name('aula.show');
//rutas para clases
Route::get('/clases', [ClaseController::class, 'index'])->name('clase.index');
Route::post('/clase', [ClaseController::class, 'store'])->name('clase.store');
Route::get('/clase', [ClaseController::class, 'create'])->name('clase.create');
Route::get('/clase/{codclase}/edit', [App\Http\Controllers\ClaseController::class, 'edit'])->name('clase.edit');
Route::get('/clase/{codclase}', [App\Http\Controllers\ClaseController::class, 'show'])->name('clase.show');
Route::put('/clase/{codclase}', [App\Http\Controllers\ClaseController::class, 'update'])->name('clase.update');
Route::delete('/clase/{codclase}', [App\Http\Controllers\ClaseController::class, 'destroy'])->name('clase.destroy');
