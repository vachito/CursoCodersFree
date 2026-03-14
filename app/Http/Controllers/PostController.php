<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Hola desde todos los posts"; 
    }

    public function create() {
        return "Hola desde el formulario para crear posts";
    }

    public function store(){
        return "Esta ruta maneja el envio de datos desde un formulario para guardar un post";
    }

    public function show($post){
        return "Aca se muestra el post con id no. $post";
    }

    public function edit($post){
        return "Aca se muestra el formulario para editar el post con id no. $post";
    }

    public function update($post){
        return "Aca se procesara el formulario para editar el post con id no. $post";
    }

    public function destroy($post){
        return "Eliminando el post con id no. $post";
    }
}
