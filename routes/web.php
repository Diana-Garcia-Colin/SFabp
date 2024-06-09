<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\CantidadController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\ProveedorController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('personas',PersonaController::class);
Route::resource('cantidades',CantidadController::class);
Route::resource('lotes',LoteController::class);
Route::resource('productos',ProductosController::class);
Route::resource('encargados',EncargadoController::class);
Route::resource('proveedores',ProveedorController::class);

