<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola desde la pagina de inicio";
    //return view('welcome');
});

Route::get('/contacto', function(){
   return "Hola desde la pagina de contacto"; 
});

Route::get('/cursos/informacion', function(){
   return "Aqui podras encontrar toda la informacion de los cursos"; 
});

Route::get('/cursos/{curso}', function($curso){
    return "Bienvenido al curso: $curso";
});

// ruta con dos parametros, uno variable y otro opciona
// Route::get('/cursos/{curso}/{categoria?}', function($curso,$categoria=null){
//     if($categoria){
//         return "Bienvenido al curso: $curso de la categoria $categoria"; 
//     }

//     return "Bienvenido al curso: $curso";
// });