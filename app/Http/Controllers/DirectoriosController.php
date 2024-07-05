<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directorio;
use Pest\Plugins\Parallel\Support\CompactPrinter;

class DirectoriosController extends Controller
{
    //
    public function mostrarDirectorios(){
        $directorios = Directorio::all();
        return view('/directorio', compact('directorios'));
    }

    public function agregarDirectorio(){
        return view('/directorio/mostrar/crearEntrada');
    }

    public function buscarDirectorio(){
        return view('/buscar');
    }
}
