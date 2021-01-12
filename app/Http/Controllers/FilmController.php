<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Film;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FilmController extends Controller
{
    public function index(Request $request){ //se busca según el texto ingresado, se retorna la vista con condiciones de búsqueda
        if($request){
        $query=trim($request->get('searchText'));
         $films=DB::table('films')
         ->where('title','LIKE','%'.$query.'%')
         ->orderBy('film_id','asc')
         ->paginate(7);
         return view('film.index',["films"=>$films,"searchText"=>$query]);
        }
    }
    
    public function create(){
        $lenguajes= DB::table('lenguajes')->get();
        return view ('film.create',["lenguajes" => $lenguajes]);
    }
    public function store(request $request){ //almacenar el objeto del modelo en nuestra tabla en la database.
        $film = new Film;
        $film->title=$request->get('title');
        $film->lenguaje_id=$request->get('lenguaje');
        $film->description=$request->get('description');
        $film->rental_duration=$request->get('rental_duration');
        $film->rental_rate = $request->get('rental_rate');
        $film->length=$request->get('length');
        $film->save();
        return Redirect::to('dvdrentalstore/film');
    }
    public function destroy($film_id){
        DB::table('films')->where('film_id', $film_id)->delete();
        return Redirect::to('dvdrentalstore/film');                                   
    }
}
