<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\CantidadController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegistrospvController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DetalleVentasController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

Auth::routes();

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');


Route::resource('personas',PersonaController::class);
Route::resource('cantidades',CantidadController::class);
Route::resource('lotes',LoteController::class);
Route::resource('productos',ProductosController::class);
Route::resource('encargados',EncargadoController::class);
Route::resource('proveedores',ProveedorController::class);
Route::resource('clientes',ClienteController::class);
Route::resource('registrospv',RegistrospvController::class);
Route::resource('ventas',VentaController::class);

Route::resource('categorias',CategoriaController::class);

Route::resource('Registro_Productos',Registro_ProductosController::class);
Route::resource('detallesventa',DetalleVentasController::class);

Route::get('/home', [ProductosController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'home'])->name('home');