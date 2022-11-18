<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/servicios', [App\Http\Controllers\ServicioController::class, 'index'])->name('servicios');
Route::get('/medicos', [App\Http\Controllers\MedicoController::class, 'index'])->name('medicos');
Route::get('/mascotas', [App\Http\Controllers\AdoptaController::class, 'index'])->name('mascotas');
Route::get('/serviciofinal', [App\Http\Controllers\ServicioFController::class, 'index'])->name('serviciofinal');
Route::get('/datomascotas', [App\Http\Controllers\MascotaController::class, 'index'])->name('datomascotas');
Route::post('/registrarcliente', [App\Http\Controllers\MascotaController::class, 'registrarcliente'])->name('registrarcliente');
Route::post('/registrarmascota', [App\Http\Controllers\RegistroMController::class, 'registrarmascota'])->name('registrarmascota');