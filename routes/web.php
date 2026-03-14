<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return "Hola desde la pagina principal";
});

 Route::get('/posts',function(){return "Hola desde todos los posts";});
 Route::get('/posts/create',function(){return "Hola desde el formulario para crear posts";});
 Route::post('/posts',function(){return "Esta ruta maneja el envio de datos desde un formulario para guardar un post";});
 Route::get('/posts/{post}',function($post){return "Aca se muestra el post con id no. $post";});
 Route::get('/posts/{post}/edit',function($post){return "Aca se muestra el formulario para editar el post con id no. $post";});
 Route::patch('/posts/{post}',function($post){return "Aca se procesara el formulario para editar el post con id no. $post";});
 Route::delete('/posts/{post}',function($post){return "Eliminando el post con id no. $post";});