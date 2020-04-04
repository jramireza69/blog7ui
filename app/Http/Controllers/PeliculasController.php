<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index ($id = null){
        $titulo = 'Listado de mis peliculas';
        $autor = $id;
        return view('includes.index', \compact('titulo', 'autor'));
    }
  /*   public function index (){
        $titulo = 'Listado de mis peliculas';
        $autor = 'Listado deautores';
        return view('includes.index', [
            'titulo' => $titulo,
            'autor' => $autor
            ] );
    } */

    public function formulario(){
        return \view('includes.form');
    }
    public function recibir(Request $request){

        $nombre = $request->input('nombre');
   $email = $request->input('email');

       /* var_dump($nombre);
       die(); */

    return "El nombre es: $nombre y el mail es: $email ";
        

    }
}
