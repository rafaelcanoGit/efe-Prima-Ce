<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Actor;
use App\Models\Film_Actor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActorController extends Controller
{
    public function index(Request $request){ //se busca según el texto ingresado, se retorna la vista con condiciones de búsqueda
        if($request){
         $query=trim($request->get('searchText'));
         $actors=DB::table('actors')
         ->where('first_name','LIKE','%'.$query.'%')
         ->where('last_name','LIKE','%'.$query.'%')
         ->orderBy('actor_id','asc')
         ->paginate(7);
         return view('actor.index',["actors"=>$actors,"searchText"=>$query]);
        }
    }
    public function create(){
        $films = DB::table('films')->get();
        return view ('actor.create',["films" => $films]);
    }
    public function store(request $request){ //almacenar el objeto del modelo en nuestra tabla en la database.
        $actor = new Actor;
        $actor->first_name=$request->get('nombre');
        $actor->last_name=$request->get('apellido');
        $actor->save();

        $film_id = $request->get('film');
   
        DB::table('films_actors')->insert([
            'actor_id' => $actor->actor_id,
            'film_id'  => $film_id
        ]);
        
        return Redirect::to('dvdrentalstore/actor');
    }
    public function destroy($actor_id){
        DB::table('actors')->where('actor_id', $actor_id)->delete();
        return Redirect::to('dvdrentalstore/actor');                                   
    }


}
