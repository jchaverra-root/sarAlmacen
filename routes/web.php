<?php

use App\Http\Controllers\InventarioController;

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

// INICIO RUTAS SISTEMA DE AUTENTIFICACION Y VISTA PRINCIPAL DEL SISTEMA //

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// FINAL RUTAS SISTEMA DE AUTENTIFICACION Y VISTA PRINCIPAL DEL SISTEMA //


//                                           INICIO RUTAS MODULO INVENTARIOS

Route::get( 'inventarios', [InventarioController::class, 'index'])->name('inventarios.index');

// Route::post( 'inventarios', [InventarioController::class, 'guardar'])->name('inventarios.guardar');

// Route::get( 'inventarios/{inventario}', [InventarioController::class, 'mostrar'])->name('inventarios.mostrar');

// Route::get( 'inventarios/{inventario}/editar', [InventarioController::class, 'editar'])->name('inventarios.editar');

// Route::match(['put','patch'], 'inventarios/{inventario}', [InventarioController::class, 'cargar'])->name('inventarios.cargar');

// Route::delete('inventarios/{inventario}', [InventarioController::class, 'eliminar'])->name('inventarios.eliminar');

//                                           FINAL RUTAS MODULO INVENTARIOS
