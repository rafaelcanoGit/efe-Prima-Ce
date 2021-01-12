<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RickAndMortyController extends Controller
{
    public function index(Request $request){ //se busca según el texto ingresado, se retorna la vista con condiciones de búsqueda
     return view('app');
    }
}
