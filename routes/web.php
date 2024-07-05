<?php

use App\Http\Controllers\ContactosController;
use App\Http\Controllers\DirectoriosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('directorio');
});

Route::get('/directorio/mostrar', [DirectoriosController::class, 'mostrarDirectorios'])->name('directorio.mostrar');

Route::get('/directorio/agregar', [DirectoriosController::class, 'agregarDirectorio'])->name('directorio.agregar');

Route::get('/directorio/buscar', [DirectoriosController::class, 'buscarDirectorio'])->name('directorio.buscar');

Route::get('/contacto/ver', [ContactosController::class, 'verContacto'])->name('contacto.ver');

Route::get('/directorio/eliminar', [DirectoriosController::class, 'eliminarDirectorio'])->name('directorio.eliminar');

Route::get('/contacto/confirmar', [ContactosController::class, 'confirmarContacto'])->name('contacto.confirmar');