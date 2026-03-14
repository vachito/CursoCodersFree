<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index'); 
    }

    public function create() {
        return view('posts.create');
    }

    public function store(){
        return "Esta ruta maneja el envio de datos desde un formulario para guardar un post";
    }

    public function show($post){
        return view('posts.show');
    }

    public function edit($post){
        return view('posts.edit');
    }

    public function update($post){
        return "Aca se procesara el formulario para editar el post con id no. $post";
    }

    public function destroy($post){
        return "Eliminando el post con id no. $post";
    }
}
