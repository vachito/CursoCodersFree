<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        $etiqueta="<h2> Este es un parrafo </h2>" ;
        return view('posts.index',compact('etiqueta')); 
    }

    public function create() {
        return view('posts.create');
    }

    public function store(){
        return "Esta ruta maneja el envio de datos desde un formulario para guardar un post";
    }

    public function show($post){
        $prueba="Examen de prueba";
        return view('posts.show',['post'=>$post,'prueba'=>$prueba]);
    }

    public function edit($post){
        $prueba="Examen de prueba";
        return view('posts.edit',compact('post','prueba'));
    }

    public function update($post){
        return "Aca se procesara el formulario para editar el post con id no. $post";
    }

    public function destroy($post){
        return "Eliminando el post con id no. $post";
    }
}
