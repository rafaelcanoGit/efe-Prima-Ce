<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lenguaje;

use Illuminate\Support\Facades\Redirect;


class LenguajeController extends Controller
{
    public function index(Request $request){ //se busca según el texto ingresado, se retorna la vista con condiciones de búsqueda
        if($request){
         $lenguajes=DB::table('lenguajes')
         ->orderBy('id','asc')
         ->paginate(7);
         return view('lenguaje.index',["lenguajes"=>$lenguajes]);
        }
    }
    public function create(){
        return view ('lenguaje.create');
    }
    public function store(request $request){ //almacenar el objeto del modelo en nuestra tabla en la database.
        $lenguaje = new Lenguaje;
        $lenguaje->name=$request->get('nombre');
        $lenguaje->save();
        return Redirect::to('dvdrentalstore/lenguaje');
    }

    public function destroy($id){
        DB::table('lenguajes')->where('id', $id)->delete();
        return Redirect::to('dvdrentalstore/lenguaje');                                   
    }

}
